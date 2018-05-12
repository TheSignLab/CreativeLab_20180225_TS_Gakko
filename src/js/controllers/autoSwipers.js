$(document).ready(function () {
    if (window.debugSwiper) {
        console.log("autoSwiper.js -> Encontrados " + $("[swiper-name]").length + " swiper por inicializar");
        console.log("autoSwiper.js -> Inicializando .... ");
    }

    $("[swiper-name]").each(function () {

        var meId = $(this).attr("swiper-name");
        var mePaginationEl = '[swiper-name="' + meId + '"] .swiper-pagination';

        window["swiper_" + meId] = new Swiper('[swiper-name="' + meId + '"] .swiper-container', {
            speed: 400,
            spaceBetween: 800,
            pagination: {
                el: mePaginationEl,
                type: 'custom',
                dynamicBullets: true,
                navigation: {
                    nextEl: '[swiper-name="' + meId + '"]  .swiper-buttonNext',
                    prevEl: '[swiper-name="' + meId + '"]  .swiper-buttonPrev',
                },
                renderCustom: function (swiper, current, total) {
                    return renderTabs(swiper, current, total);
                }
            },

        });


        if (window.debugSwiper) {
            console.log("Swiper On Init")
        }
        $('[swiper-name="' + meId + '"] .swiper-buttonPrev').click(function () {
            window["swiper_" + meId].slidePrev();
        });
        $('[swiper-name="' + meId + '"] .swiper-buttonNext').click(function () {
            window["swiper_" + meId].slideNext();
        })


        window["swiper_" + meId].on('paginationRender', function () {
            $('[swiper-name="' + meId + '"]' + ' tab').click(function () {
                var kSlide = $(this).attr("target-slide");

                window["swiper_" + meId].slideTo(kSlide, 500);
                window["swiper_" + meId].update();
            });
            var allTabs = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab');
            var activeTabs = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab.active');
            var currentActiveTab = $(allTabs).index(activeTabs);
            var x = window.matchMedia("(min-width: 800px)")
            if (x.matches) { // If media query matches
                var nextActiveTab = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab')[parseInt(currentActiveTab + 1)];
                var prevActiveTab = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab')[parseInt(currentActiveTab - 1)];
                var nextnextActiveTab = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab')[parseInt(currentActiveTab + 2)];

                $(allTabs).hide();
                $(activeTabs).show();
                $(prevActiveTab).show();
                $(nextActiveTab).show();
                $(nextnextActiveTab).show();


            } else {
                $(allTabs).hide();
                $(activeTabs).show();
                $(nextActiveTab).show();
            }

            $('[from-swiper="' + meId + '"] img').hide();
            $('[from-swiper="' + meId + '"] anim').hide();

            $('[from-swiper="' + meId + '"] [paso="' + (parseInt(window["swiper_" + meId].activeIndex) + 1) + '"] img').show();
            $('[from-swiper="' + meId + '"] [paso="' + (parseInt(window["swiper_" + meId].activeIndex) + 1) + '"] anim').show();



        });

        window["swiper_" + meId].on('slideChange', function () {


            $('[from-swiper="' + meId + '"] img').hide();
            $('[from-swiper="' + meId + '"] anim').hide();

            $('[from-swiper="' + meId + '"] [paso="' + (parseInt(window["swiper_" + meId].activeIndex) + 1) + '"] img').show();
            $('[from-swiper="' + meId + '"] [paso="' + (parseInt(window["swiper_" + meId].activeIndex) + 1) + '"] anim').show();


            $('[from-swiper="' + meId + '"]' + ' anim').each(function () {
                window[$(this).attr("id")].stop();
            });
            $('[from-swiper="' + meId + '"] [paso="' + (parseInt(window["swiper_" + meId].activeIndex) + 1) + '"] anim').each(function () {
                window[$(this).attr("id")].play();
            });

            var allTabs = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab');
            var activeTabs = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab.active');
            var currentActiveTab = $(allTabs).index(activeTabs);

            var nextActiveTab = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab')[parseInt(currentActiveTab + 1)];

            var x = window.matchMedia("(min-width: 800px)")
            if (x.matches) { // If media query matches
                var nextActiveTab = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab')[parseInt(currentActiveTab + 1)];
                var prevActiveTab = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab')[parseInt(currentActiveTab - 1)];
                var nextnextActiveTab = $('[swiper-name="' + meId + '"]' + ' tabs[type="dynamic"] tab')[parseInt(currentActiveTab + 2)];

                $(allTabs).hide();
                $(activeTabs).show();
                $(prevActiveTab).show();
                $(nextActiveTab).show();
                $(nextnextActiveTab).show();


            } else {
                $(allTabs).hide();
                $(activeTabs).show();
                $(nextActiveTab).show();
            }




        });


        window["swiper_" + meId].on('transitionEnd', function () {
            $('[swiper-name="' + meId + '"]' + ' anim').each(function () {
                window[$(this).attr("id")].play();
            });
        });


        window["swiper_" + meId].update();
    })
    if (window.debugSwiper) {
        console.log("autoSwiper.js -> Inicializados los Swiper");
    }

    function renderTabs(swiper, current, total) {

        var htmlOut = "";

        if ($(swiper.el).parent().attr("swiper-name") == "schedules") {
            htmlOut = renderDynamicTabs(swiper, current, total);
        } else {
            htmlOut = renderStaticTabs(swiper, current, total);
        }

        htmlOut += "";
        return htmlOut;
    };







})

function renderStaticTabs(swiper, current, total) {
    var nTabs = total;
    var thisTab = current;
    var tabContent = getTabContentByCTSSwiperName(swiper);
    var tabIndex = getTabContentByCTSSwiperNameMobile(swiper);

    var htmlOut = "<tabs type='static'>";
    for (var i = 1; i < nTabs + 1; i++) {

        // Active Tab
        if (current == i) {
            htmlOut += '<tab class="active" target-slide="' + (i - 1) + '">';
            htmlOut += '<span class="mobile">' + tabIndex[i] + '</span>';
            htmlOut += '<span class="desktop">' + tabContent[i] + '</span>';
            htmlOut += '</tab>';
        } else {
            htmlOut += '<tab target-slide="' + (i - 1) + '">';
            htmlOut += '<span class="mobile">' + tabIndex[i] + '</span>';
            htmlOut += '<span class="desktop">' + tabContent[i] + '</span>';
            htmlOut += '</tab>';
        }



    }
    htmlOut += "</tabs>";
    return htmlOut;
}

function renderDynamicTabs(swiper, current, total) {
    var nTabs = total;
    var thisTab = current;
    var tabContent = getTabContentByCTSSwiperName(swiper);
    var tabIndex = getTabContentByCTSSwiperNameMobile(swiper);
    var htmlOut = "<tabs type='dynamic'>";

    for (var i = 1; i < nTabs + 1; i++) {

        // Active Tab
        if (current == i) {
            htmlOut += '<tab class="active" target-slide="' + (i - 1) + '">';
            htmlOut += '<span class="mobile">' + tabIndex[i] + '</span>';
            htmlOut += '<span class="desktop">' + tabContent[i] + '</span>';
            htmlOut += '</tab>';
        } else {
            htmlOut += '<tab target-slide="' + (i - 1) + '">';
            htmlOut += '<span class="mobile">' + tabIndex[i] + '</span>';
            htmlOut += '<span class="desktop">' + tabContent[i] + '</span>';
            htmlOut += '</tab>';
        }

    }
    htmlOut += "</tabs>";
    return htmlOut;
}






function getTabContentByCTSSwiperName(swiper) {

    var meName = $(swiper.el).parent().attr("swiper-name");
    var meList = [];
    if (meName == "admissionProcess") {
        meList[1] = "PASO 1";
        meList[2] = "PASO 2";
        meList[3] = "PASO 3";
        meList[4] = "PASO 4";
        meList[5] = "PASO 5";
    }

    if (meName == "services") {
        meList[1] = "PSICOLOGÍA";
        meList[2] = "BIBLIOTECA";
        meList[3] = "CAFETERÍA";
        meList[4] = "1RA. COMUNIÓN";
    }

    if (meName == "facilities") {
        meList[1] = "CAFETERÍA";
        meList[2] = "BIBLIOTECA";
        meList[3] = "KINDERGARTEN";
        meList[4] = "SECRETARÍA";
    }

    if (meName == "philosophy") {
        meList[1] = "FILOSOFÍA";
        meList[2] = "VALORES";

    }

    if (meName == "mission") {
        meList[1] = "MISIÓN";
        meList[2] = "VISIÓN";

    }

    if (meName == "schedules") {
        meList[1] = "KINDER";
        meList[2] = "TRANSICIÓN";
        meList[3] = "PRIMERO";
        meList[4] = "SEGUNDO";
        meList[5] = "TERCERO";
        meList[6] = "CUARTO";
        meList[7] = "QUINTO";
        meList[8] = "SEXTO A";
        meList[9] = "SEXTO B";
        meList[10] = "SEPTIMO A";
        meList[11] = "SEPTIMO B";
        meList[12] = "OCTAVO A";
        meList[13] = "OCTAVO B";
        meList[14] = "NOVENO A";
        meList[15] = "NOVENO B";
        meList[16] = "DECIMO A";
        meList[17] = "DECIMO B";
        meList[18] = "ONCE A";
        meList[19] = "ONCE B";
    }

    return meList;
}

function getTabContentByCTSSwiperNameMobile(swiper) {

    var meName = $(swiper.el).parent().attr("swiper-name");
    var meList = [];
    if (meName == "schedules") {
        meList[1] = "KINDER";
        meList[2] = "TRANSICIÓN";
        meList[3] = "PRIMERO";
        meList[4] = "SEGUNDO";
        meList[5] = "TERCERO";
        meList[6] = "CUARTO";
        meList[7] = "QUINTO";
        meList[8] = "SEXTO A";
        meList[9] = "SEXTO B";
        meList[10] = "SEPTIMO A";
        meList[11] = "SEPTIMO B";
        meList[12] = "OCTAVO A";
        meList[13] = "OCTAVO B";
        meList[14] = "NOVENO A";
        meList[15] = "NOVENO B";
        meList[16] = "DECIMO A";
        meList[17] = "DECIMO B";
        meList[18] = "ONCE A";
        meList[19] = "ONCE B";

    } else {

        if (meName == "mission") {
            meList[1] = "MISIÓN";
            meList[2] = "VISIÓN";

        } else {
            if (meName == "philosophy") {
                meList[1] = "FILOSOFÍA";
                meList[2] = "VALORES";
            } else {
                meList[1] = "1";
                meList[2] = "2";
                meList[3] = "3";
                meList[4] = "4";
                meList[5] = "5";
                meList[6] = "6";
                meList[7] = "6A";
                meList[8] = "6B";
                meList[9] = "7A";
                meList[10] = "7B";
                meList[11] = "8A";
                meList[12] = "8B";
                meList[13] = "9A";
                meList[14] = "9B";
                meList[15] = "10A";
                meList[16] = "10B";
                meList[17] = "11A";
            }
        }
    }

    return meList;
}
