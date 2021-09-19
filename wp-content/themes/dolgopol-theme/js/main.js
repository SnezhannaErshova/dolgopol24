// // --------------menu scroll--------------------------
jQuery(window).scroll(function(){
    if ($(window).scrollTop() > 0 ){
        $("header").addClass('active');
    } else {
        $("header").removeClass('active');
    }
});
// // --------------END menu scroll--------------------------

$(document).ready(function () {

    // sliders
    var prevSlider = new Swiper(".preview .swiper-container", {
        autoHeight: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
    });

    var reviewsSlider = new Swiper('.reviews .swiper-container', {
        cssMode: true,
        navigation: {
            nextEl: '.reviews .swiper-button-next',
            prevEl: '.reviews .swiper-button-prev',
        },
    });
    // end sliders

    // burger menu
    $('.header-burger').click(function () {
        $('.header-burger').toggleClass('active');
        $('.header-nav').toggleClass('active');
        let margin = $('header .container').css('margin-right');
        let padding = $('header .container').css('padding-right');
        // if ($('.header-nav').hasClass('active')) {
            $('.header-nav').css('right', '-1000px');
        // } else {
            $('.header-nav.active').css('right', margin);
        // }
        $('.header-nav.active').css('padding-right', padding);
    });
    if ($(window).width() <= 768){
        $('.header-nav').addClass('mobile');
    } else {
        $('.header-nav').removeClass('mobile');
    }
    // if ($(window).width() <= 576){
    //     $('.header-nav').append($('.header-contacts'));
    // }
    $(window).resize(function() {
        if ($(window).width() <= 768){
            $('.header-nav').addClass('mobile');
        } else {
            $('.header-nav').removeClass('mobile');
        }
        if ($(window).width() > 991){
            $('.imgBlock').each(function () {
                $blockHeight = $(this).find('.imgBlock-text').css('height');
                $(this).find('.imgBlock-img').css('height', $blockHeight);
            })
        }
    });
    //end burger menu

    // about page - img-text block
    if ($(window).width() > 991){
        $('.imgBlock').each(function () {
            $blockHeight = $(this).find('.imgBlock-text').css('height');
            $(this).find('.imgBlock-img').css('height', $blockHeight);
        })
    }
    // end about page - img-text block









    // $('.preview-slide-title').after($('.preview-slide-img'));


    //map
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [56.017920, 92.823853],
                zoom: 16
            }, {
                searchControlProvider: 'yandex#search'
            }),

            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #161616; font-family: Montserrat Alternates; font-size: 20px; font-weight: bold; white-space: nowrap;">$[properties.iconContent]</div>'
            ),

            myPlacemarkWithContent = new ymaps.Placemark([56.017920, 92.823853], {
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#imageWithContent',
                // Своё изображение иконки метки.
                iconImageHref: '/wp-content/themes/dolgopol-theme/img/map-icon.svg',
                // Размеры метки.
                iconImageSize: [60, 60],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-30, -50],
                // Смещение слоя с содержимым относительно слоя с картинкой.
                iconContentOffset: [22, 12],
                // Макет содержимого.
                iconContentLayout: MyIconContentLayout
            });

        myMap.geoObjects
            .add(myPlacemarkWithContent);
    });
    // end map



    // $(".fancybox").fancybox();
    // $(".modalbox").fancybox();
    //
    // $('.header-menu').click(function () {
    //     if ($(window).width() <= 800){
    //         console.log('param')
    //         if($('.header-menu').hasClass('active')) {
    //             $('body').removeClass('noScroll');
    //         } else {
    //             $('body').addClass('noScroll');
    //         }
    //     }



    // })




//     jQuery('input[type="tel"]').mask('+7(999) 999-99-99');

//     $('.contacts-page-info .main-btn').click(function () {
//         $('#getCall-contacts').modal().show();
//         // let title = $(this).text();
//         // $('#getCall').find('h2.getCall-title').text(title);
//     })
//     $('.credit-banner-btn').click(function () {
//         $('#getCall2').modal().show();
//     })
//     $('.write-us .main-btn').click(function () {
//         $('#getCall-contacts').modal().show();
//         // let title = $(this).text();
//         // $('#getCall').find('h2.getCall-title').text(title);
//     })

    // if($('.header-menu').hasClass('active')) {
    //     $(document.body).on('click', function(e){
    //
    //         if(!$(e.target).closest('#mobile-menu').length){
    //             $('.header-menu').removeClass('active');
    //         }
    //
    //     })
    // }

    // $(document).click(function (e) {
    //     if ( !$('.header-menu').is(e.target) && $('.header-menu').has(e.target).length === 0) {
    //         $('.header-menu').removeClass('active');
    //     };
    // });





    // document.addEventListener( 'wpcf7mailsent', function( event ) {
    //     // $('#cf-success-modal').modal().show();
    //     $('.wpcf7-response-output').addClass('hide');
    // }, false );


    // $('#getCall form').on('submit', function() {
    //     if($('#getCall .wpcf7 form.sent .wpcf7-response-output')) {
    //         console.log(1)
    //     }
    // });

//===========sliders================
    // var previewSlider = new Swiper('.preview .swiper-container', {
    //     pagination: {
    //         el: '.preview .swiper-pagination',
    //         clickable: true,
    //         effect: 'fade',
    //         renderBullet: function (index, className) {
    //             return '<span class="' + className + '">' + (index + 1) + '</span>';
    //         },
    //     },
    // });
    // var aboutSlider = new Swiper('.about .swiper-container', {
    //     navigation: {
    //         nextEl: '.about .swiper-button-next',
    //         prevEl: '.about .swiper-button-prev',
    //     },
    // });

    // var aboutPreview = new Swiper('.about-preview-slider .swiper-container', {
    //     navigation: {
    //         nextEl: '.about-preview-slider .swiper-button-next',
    //         prevEl: '.about-preview-slider .swiper-button-prev',
    //     },
    // });
    // var servicesDetail = new Swiper('.prev-block-slider .swiper-container', {
    //     navigation: {
    //         nextEl: '.prev-block-slider .swiper-button-next',
    //         prevEl: '.prev-block-slider .swiper-button-prev',
    //     },
    // });

    // var promotionsSlider = new Swiper('.promotion .swiper-container', {
    //     slidesPerView: 3,
    //     spaceBetween: 30,
    //     navigation: {
    //         nextEl: '.promotion .swiper-button-next',
    //         prevEl: '.promotion .swiper-button-prev',
    //     },
    //     breakpoints: {
    //         768: {
    //             slidesPerView: 2,
    //         },
    //         576: {
    //             slidesPerView: 1,
    //             spaceBetween: 0,
    //         },
    //     }
    // });

    // var reviewsSlider = new Swiper('.reviews .swiper-container', {
    //     slidesPerView: 2,
    //     spaceBetween: 30,
    //     navigation: {
    //         nextEl: '.reviews .swiper-button-next',
    //         prevEl: '.reviews .swiper-button-prev',
    //     },
    //     breakpoints: {
    //         768: {
    //             slidesPerView: 1,
    //         },
    //     }
    // });

    // var calcSlider = new Swiper('.calc-left-top .swiper-container', {
    //     slidesPerView: 3,
    //     // spaceBetween: 30,
    //     navigation: {
    //         nextEl: '.calc-left-top .swiper-button-next',
    //         prevEl: '.calc-left-top .swiper-button-prev',
    //     },
    //     breakpoints: {
    //         768: {
    //             slidesPerView: 1,
    //         },
    //     }
    // });



    // var workGallery = new Swiper('.work-item-gallery .swiper-container', {
    //     navigation: {
    //         nextEl: '.work-item-gallery .swiper-button-next',
    //         prevEl: '.work-item-gallery .swiper-button-prev',
    //     },
    // });



    // --------------menu--------------------------
    // $('.header-menu').click(function () {
    //     $('.header-menu').toggleClass('active');
    // })
    // $('.header-menu').click(function () {
    //     $('.header-menu').toggleClass('active');
    // })

    // if ($(window).width() <= '576'){
    //
    //         if($('.header-menu').hasClass('active')) {
    //             $("body").addClass("noScroll");
    //         } else {
    //             $("body").removeClass("noScroll");
    //         }
    //
    // }
    // --------------END menu--------------------------

    // --------------form checkbox--------------------------
    // $('.online-order-checkbox .wpcf7-list-item-label').click(function () {
    //     if($('.online-order-checkbox input').prop('checked')) {
    //         $('.wpcf7-list-item-label').removeClass('active');
    //     }
    //     else {
    //         $('.wpcf7-list-item-label').addClass('active');
    //     }
    // })
    // --------------END form checkbox--------------------------

    // --------------calculator--------------------------
   // console.log(objects);
    // selected = {};

    // function chnageType() {
    //     //console.log(images)
    //     let type = $('.calc-type-item.active').text();
    //     if(type == 'Окон') {
    //         type = 'Окно';
    //     } else {
    //         type = 'Балкон';
    //     }
    //     //console.log(type)
    //     let res = '<div class="calc-left-top">' + '<div class="swiper-container">'+ '<div class="swiper-wrapper">';
    //     let i = 0;
    //     let first = 0;
    //     for (key in objects[type]) {
    //         if(i == 0) {
    //             first = key;
    //         }

    //         res += '<div class="swiper-slide">'+
    //             '<div class="calc-left-item item-type">'+
    //             '<input type="radio" imageid="' + key + '" id="window' + i + '"'+
    //                   'name="window" value="100" ' + (i == 0 ? 'checked' : '') + '>'+
    //             '<label for="window' + i + '">'+
    //                 '<img src="' + previews[key] + '"/>'+
    //             '</label>'+
    //             '</div>'+
    //         '</div>';
    //         i++;
    //     }
    //     res += '</div>' +
    //         '</div>'+
    //         '<div class="swiper-button-next orange-arrow-slider">'+
    //             '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="29" viewBox="0 0 16 29" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60032 -1.25886e-06C2.0099 -1.22305e-06 2.41948 0.157883 2.73147 0.472047L15.5308 13.3608C16.1564 13.9907 16.1564 15.0089 15.5308 15.6388L2.73146 28.5275C2.10589 29.1575 1.09475 29.1575 0.469177 28.5275C-0.156391 27.8976 -0.156391 26.8794 0.469177 26.2495L12.1374 14.4998L0.46918 2.75013C-0.156389 2.12019 -0.156389 1.10198 0.46918 0.472046C0.781164 0.157883 1.19074 -1.29467e-06 1.60032 -1.25886e-06Z" fill="#FF9A01"/></svg>'+
    //         '</div>'+
    //     '<div class="swiper-button-prev orange-arrow-slider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="29" viewBox="0 0 16 29" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.3997 29C13.9901 29 13.5805 28.8421 13.2685 28.528L0.469177 15.6392C-0.156392 15.0093 -0.156392 13.9911 0.469177 13.3612L13.2685 0.472452C13.8941 -0.157484 14.9053 -0.157484 15.5308 0.472452C16.1564 1.10239 16.1564 2.1206 15.5308 2.75053L3.86261 14.5002L15.5308 26.2499C16.1564 26.8798 16.1564 27.898 15.5308 28.528C15.2188 28.8421 14.8093 29 14.3997 29Z" fill="#FF9A01"/></svg>'+
    //   '</div>'+
    //         '</div>'+
    //         '<div class="calc-left-bottom">' +
    //         '<img class="calc-left-bottom-img" src="' + images[first] + '" alt="">' +
    //         '</div>';

    //     $('.calc-left').html(res);


    // }

    // function getHtml(flag) {
    // 	$('.calc-spinner').removeClass('hidden');
    //     $('.calc-left-bottom-img').attr('src', images[$('.calc-left-item.item-type input:checked').attr('imageid')]);
    //     let type = $('.calc-type .calc-type-item.active').text();
    //     if(type == 'Окон') {
    //         type = 'Окно';
    //     } else {
    //         type = 'Балкон';
    //     }
    //     selected = objects[type][parseInt($('.calc-left-item.item-type input:checked').attr('imageid'))];
    //     let leftColumn = '';
    //     selectedChar = null;



    //     selected.map((elem) => {
    //     	if(type == 'Окно') {
    //     		if($('input[name="building_types"]:checked').length && $('input[name="floors"]:checked').length) {
    //     			if(elem.building_type.replace(/\s/g, '').replace(' ', '') == $('input[name="building_types"]:checked').attr('data-title').replace(/\s/g, '')  && elem.floor.replace(/\s/g, '') == $('input[name="floors"]:checked').attr('data-title').replace(/\s/g, '') ) {
		  //              selectedChar = elem;
		  //          }
    //     		} else {
    //     			if(elem.building_type.replace(/\s/g, '').replace(' ', '') == 'Панельныйдом'  && elem.floor.replace(/\s/g, '') == '5этажей' ) {
		  //              selectedChar = elem;
		  //          }
    //     		}
    //     	}
            
    //         if(type == 'Балкон') {
    //             selectedChar = elem;
    //         }
    //     })
        // console.log(selectedChar)
        
        // let elems = [];
        
        // $('.calc-right-top input.active').each(function(){        	            
        //     elems.push($(this).attr('id'));
        // })
        // console.log(elems);

        

    //     $.ajax({
    //     	method: 'post',
    //     	dataType:'html',
    //     	url: '/wp-json/payment/v1/calculation/',
    //     	data: {type: type, selected: selectedChar, elems: flag ? elems : []},
    //     	success: function(data) {  
    //     		$('.calc-right-top').html('')      		        	
    //     		$('.calc-right-top').html(data)
    //     		recalcPrice()
    //     		$('.calc-spinner').addClass('hidden');
    //     	},
    //     	error: function(error){   
    //     	$('.calc-spinner').addClass('hidden');     		
    //     	}
    //     })

    // }

    // $(document).on('click', '.calc-left-item.item-type', function() {      
    //     getHtml(false)
    // })

    
    // $(document).on('change', '.calc-check-item input', function() { 
    // 	if($(this).attr('type') == 'checkbox') {

    //         let that = this;
    //         $(this).parent().parent().find('input[type="checkbox"]').each(function() {                
    //             if($(that).attr('id') != $(this).attr('id')) {
    //                 $(this).removeClass('active');
    //                 $(this).prop('checked', false);;
    //             }
    //         })
            
    // 		$(this).toggleClass('active');
    // 	} else{
    // 		if($(this).attr('type') == 'radio') {
    // 			$('input[name="' + $(this).attr('name') + '"]').removeClass('active')
    // 			$(this).addClass('active')
    // 		}
    // 	}
    // 	setTimeout(function(){getHtml(true)}, 700)
        
    // })

    // function recalcPrice() {
    // 	let sum = parseInt($('#start-price').text());
    //     $('.calc-item-profile input:checked').each(function(){
    //         sum += parseInt($(this).attr('value'));
    //     })

    //     $('.calc-sum').text(sum);
    // }

    // $(document).on('click', '.calc-type-wrap', function () {
    //     $('.calc-type-wrap .calc-type-items').toggleClass('active');
    //     if($('.calc-type-wrap .calc-type-items').hasClass('active')) {
    //         $('.calc-type-wrap').addClass('active');
    //     } else {
    //         $('.calc-type-wrap').removeClass('active');
    //     }
    //     if($('#calc-type-item-window').hasClass('active')) {
    //         $('#calc-type-item-window-list').removeClass('active');
    //         $('#calc-type-item-balcony-list').addClass('active');
    //         $('#calc-type-item-balcony-list').click(function (){

    //             $('#calc-type-item-balcony-list').removeClass('active');
    //             $('#calc-type-item-balcony').addClass('active');
    //             $('#calc-type-item-window').removeClass('active');
    //             chnageType()
    //             getHtml()


    //         })
    //     }
    //     if($('#calc-type-item-balcony').hasClass('active')) {
    //         $('#calc-type-item-balcony-list').removeClass('active');
    //         $('#calc-type-item-window-list').addClass('active');
    //         $('#calc-type-item-window-list').click(function (){
    //             $('#calc-type-item-window-list').removeClass('active');
    //             $('#calc-type-item-window').addClass('active');
    //             $('#calc-type-item-balcony').removeClass('active');
    //             chnageType()
    //             getHtml()

    //         })
    //     }
    // })


    // $('.calc-type-items li').on('click', function(){
    //     setTimeout(function(){
    //         if(type='Окно') {
    //             var calcSlider = new Swiper('.calc-left-top .swiper-container', {
    //                 slidesPerView: 3,
    //                 spaceBetween: 30,
                    // centeredSlides: true,
            //         navigation: {
            //             nextEl: '.calc-left-top .swiper-button-next',
            //             prevEl: '.calc-left-top .swiper-button-prev',
            //         },
            //         breakpoints: {
            //             768: {
            //                 slidesPerView: 1,
            //             },
            //         }
            //     });
            // }
            // else {
            //     var calcSlider = new Swiper('.calc-left-top .swiper-container', {
            //         slidesPerView: 2,
                    // spaceBetween: 30,
        //             navigation: {
        //                 nextEl: '.calc-left-top .swiper-button-next',
        //                 prevEl: '.calc-left-top .swiper-button-prev',
        //             },
        //             breakpoints: {
        //                 768: {
        //                     slidesPerView: 1,
        //                 },
        //             }
        //         });
        //     }

        // }, 500);

    // }); 
    // $('.calc .calc-left-item input').change(function (){
    //     for (let i=1;i<5;i++) {
    //         if($('.calc-left-item input#window'+i).prop("checked")) {
    //             $('.calc-left-bottom-img').attr("src", "/wp-content/themes/theme/img/window" + i +".png");
    //         }
    //         if($('.calc-left-item input#balcony'+i).prop("checked")) {
    //             $('.calc-left-bottom-img').attr("src", "/wp-content/themes/theme/img/balcony" + i +".png");
    //         }
    //     }
    // })
    // let sum, window, profile, typeHouse, floor, decoration, mounting, mosquito, decorationOut, decorationInto, away, roof;
    // function summ () {
    //     sum=0, window=0, profile=0, typeHouse=0, floor=0, decoration=0, mounting=0, mosquito=0, decorationOut=0, decorationInto=0, away=0, roof=0;
    //     if($('.calc-wrapper-window').hasClass('active')) {
    //         if ($('.calc-wrapper-window .calc-item-typeHouse input#kirpich').prop("checked")) {
    //             console.log('hm');
    //             $('.calc-wrapper-window .calc-item-decoration label').text("Подоконник 550мм, Откосы 500мм");
    //         }
    //         if ($('.calc-wrapper-window .calc-item-typeHouse input#panel').prop("checked")) {
    //             $('.calc-wrapper-window .calc-item-decoration label').text("Подоконник 3000мм, Откосы 250мм");
    //         }
    //
    //
    //
    //         $('.calc-wrapper-window .calc-left-item input').each(function(){
    //             if($(this).prop("checked")){
    //                 window = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-window .calc-item-profile input').each(function(){
    //             if($(this).prop("checked")){
    //                 profile = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-window .calc-item-typeHouse input').each(function(){
    //             if($(this).prop("checked")){
    //                 typeHouse = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-window .calc-item-floor input').each(function(){
    //             if($(this).prop("checked")){
    //                 floor = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-window .calc-item-decoration input').each(function(){
    //             if($(this).prop("checked")){
    //                 decoration = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-window .calc-item-mounting input').each(function(){
    //             if($(this).prop("checked")){
    //                 mounting = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-window .calc-item-mosquito input').each(function(){
    //             if($(this).prop("checked")){
    //                 mosquito = parseInt($(this).val());
    //             }
    //         });
    //         sum = parseInt(window+profile+typeHouse+floor+decoration+mounting+mosquito);
    //     }
    //     if($('.calc-wrapper-balcony').hasClass('active')) {
    //         $('.calc-wrapper-balcony .calc-left-item input').each(function(){
    //             if($(this).prop("checked")){
    //                 window = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-typeHouse input').each(function(){
    //             if($(this).prop("checked")){
    //                 typeHouse = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-decorationOut input').each(function(){
    //             if($(this).prop("checked")){
    //                 decorationOut = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-decorationInto input').each(function(){
    //             if($(this).prop("checked")){
    //                 decorationInto = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-away input').each(function(){
    //             if($(this).prop("checked")){
    //                 away = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-mounting input').each(function(){
    //             if($(this).prop("checked")){
    //                 mounting = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-mosquito input').each(function(){
    //             if($(this).prop("checked")){
    //                 mosquito = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-floor input').each(function(){
    //             if($(this).prop("checked")){
    //                 floor = parseInt($(this).val());
    //             }
    //         });
    //         $('.calc-wrapper-balcony .calc-item-roof input').each(function(){
    //             if($(this).prop("checked")){
    //                 roof = parseInt($(this).val());
    //                 console.log('rrrrrrrrr');
    //             }
    //         });
    //         sum = parseInt(window+typeHouse+decorationOut+decorationInto+away+mounting+mosquito+floor+roof);
    //     }
    //     $('.calc-sum').html(sum);
    //     return sum;
    // }
    // summ();
    // $('.calc input').change(function (){
    //     summ();
    // })
    // -------------- END calculator--------------------------






    // $('.wpcf7-tel').mask('+7(000)000-00-00');


    // $('.header-mobile').click( function () {
    //     $('.header-nav-menu-mobile').addClass('nav-menu-mobile-show');
    // })
    // $('.close-burger').click( function () {
    //     $('.header-nav-menu-mobile').removeClass('nav-menu-mobile-show');
    // })

    // if($(window).width()<990){
    // }






})
