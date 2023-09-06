/*
 * FUNÇÕES NECESSÁRIAS
 * Projeto: Casa Firjan
 * Desenvolvimento: GM5
 */
var Util = {
  agenda: function (element) {

    // var calendar = $(element).calendarGC({
    //   dayBegin: 0,
    //   prevIcon: '&#x3c;',
    //   nextIcon: '&#x3e;',
    //   dayNames: [
    //       "Domingo", 
    //       "Segunda", 
    //       "Terça", 
    //       "Quarta", 
    //       "Quinta", 
    //       "Sexta", 
    //       "Sábado"
    //   ],
    //   monthNames: [
    //       "Janeiro",
    //       "Fevereiro",
    //       "Março",
    //       "Abril",
    //       "Maio",
    //       "Junho",
    //       "Julho",
    //       "Agosto",
    //       "Setembro",
    //       "Outubro",
    //       "Novembro",
    //       "Dezembro",
    //     ],
    //   onPrevMonth: function (e) {
    //     console.log("prev");
    //     console.log(e);
    //   },
    //   onNextMonth: function (e) {
    //     console.log("next");
    //     console.log(e);
    //   },
    //   events: getHoliday(),
    //   onclickDate: function (e, data) {
    //     console.log(e, data);
    //   }
    // });
    
    // function getHoliday() {
    //     var d = new Date();
    //     var totalDay = new Date(d.getFullYear(), d.getMonth(), 0).getDate();
    //     var events = [];
    
    //     for (var i = 1; i <= totalDay; i++) {
    //       var newDate = new Date(d.getFullYear(), d.getMonth(), i);
    //       if (newDate.getDay() == 0) {   //if Sunday
    //         events.push({
    //           date: newDate,
    //           eventName: "Sunday free",
    //           className: "badge bg-danger",
    //           onclick(e, data) {
    //             console.log(data);
    //           },
    //           dateColor: "red"
    //         });
    //       }
    //       if (newDate.getDay() == 6) {   //if Saturday
    //         events.push({
    //           date: newDate,
    //           eventName: "Saturday free",
    //           className: "badge bg-danger",
    //           onclick(e, data) {
    //             console.log(data);
    //           },
    //           dateColor: "red"
    //         });
    //       }
    
    //     }
    //     return events;
    // }
    
    // getHoliday();
  },      
  checkSubmenuParentActiveTrail: function () {
    for (let index = 0; index < $('.menu--menu-principal').children().length; index++) {
      const element = $('.menu--menu-principal').children()[index];
    
      if(element) {
        if($(element).children()[1]) {
          if($($(element).children()[1]).children()) {
            let arr = Array.from($($(element).children()[1]).children());
            if(arr.find(item => item.classList.contains('menu-item--active-trail'))) {
            	console.log(arr);
                //$(element).addClass('menu-item--active-trail')
            }
          }
        }
      }
    }
  },  
  filter: function () {
    if($('.filter').length) {
      let page = document.getElementsByTagName('main')[0].dataset.controller;

      if(page === 'agenda') {
        // $(".fc-header-toolbar").after($(".filter").clone(true));
        $('.filter [type="checkbox"]').on('click', function() {
          // in the handler, 'this' refers to the box clicked on
          var $box = $(this);
          if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = ".filter [type='checkbox'][name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
          } else {
            $box.prop("checked", false);
          }
        });    
      }

      $('.filter [type="checkbox"]').change(function() {
          let checked = $('.filter [type="checkbox"]:checked').map(function(_, el) {
              return $(el).val();
          }).get();

          let page = document.getElementsByTagName('main')[0].dataset.controller;

          // if(page === 'agenda') {
          //   $('.filter [type="checkbox"]').on('click', function() {
          //     // in the handler, 'this' refers to the box clicked on
          //     var $box = $(this);
          //     if ($box.is(":checked")) {
          //       // the name of the box is retrieved using the .attr() method
          //       // as it is assumed and expected to be immutable
          //       var group = ".filter [type='checkbox'][name='" + $box.attr("name") + "']";
          //       // the checked state of the group/box on the other hand will change
          //       // and the current value is retrieved using .prop() method
          //       $(group).prop("checked", false);
          //       $box.prop("checked", true);
          //     } else {
          //       $box.prop("checked", false);
          //     }
          //   });   
          // }

          setTimeout(function() { 
            for (let index = 0; index < $('[data-category]').length; index++) {
                const element = $('[data-category]')[index];
              //   console.log(element.dataset.category, checked)
                  if(page && page === 'agenda') {
                    if(checked.length) {
                      if(!checked.includes(element.dataset.category)) {
                        $(element).addClass('hidden');
                        $(element).removeClass('shown');
                      } else {
                        $(element).removeClass('hidden');
                        $(element).addClass('shown');
                      }
                    } else {
                        if(element.dataset.category === 'all') {
                          $(element).addClass('shown'); 
                        } else {
                          $(element).removeClass('shown'); 
                        }
                        $(element).addClass('hidden');
                    }
                  } else {
                    if(checked.length) {
                      if(!checked.includes(element.dataset.category)) {
                        $(element).addClass('d-none');
                        $(element).removeClass('d-flex');
                      } else {
                        $(element).removeClass('d-none');
                        $(element).addClass('d-flex');
                      }
                    } else {
                        $(element).removeClass('d-none');
                        $(element).addClass('d-flex'); 
                    }
                  }

            }
          }, 300);
      });
    }
  },  
  tabs: function () {
    let tabs = $('.tabs-nav');
    if(tabs.length) {
      $('.tabs-nav a').click(function (e) {
          let tab = $(this)[0].dataset.id;
          $(this).addClass('active');

          for (let index = 0; index < $('.tabs-nav').children().length; index++) {
              const element = $('.tabs-nav').children()[index];
              $(element).not($(this)).removeClass('active')
          }
          
          if($('.tabs-panels').length) {
              for (let index = 0; index < $('.tabs-panels').children().length; index++) {
                  const element = $('.tabs-panels').children()[index];
                  $(element).removeClass('d-flex', 'd-none'),
                  $(element).addClass(element.dataset.id == tab ? 'd-flex' : 'd-none')
              }
          }
      });

      if(window.location.href.indexOf('#')) {
        let tid = window.location.href.split('#')[1];

        for (let index = 0; index < $('.tabs-nav').children().length; index++) {
          const element = $('.tabs-nav').children()[index];
          if(element.dataset.id == tid) {
            $(element).trigger('click');
          }
        }        
      }

      $('header nav a').click(function (e) {
        if($(this).attr('href').indexOf('#')) {
          let tid = $(this).attr('href').split('#')[1];
          
          for (let index = 0; index < $('.tabs-nav').children().length; index++) {
            const element = $('.tabs-nav').children()[index];
            if(element.dataset.id == tid) {
              $(element).trigger('click');
            }
          }
        }
      });      
    }
  },
  gallery: function () {
    var sortby = 'day';
    var day = [];
    var id = [];

    var lightbox = new SimpleLightbox('.gallery-item a', {
      overlayOpacity: .5
    });

    var $gallery = $('.gallery-item');

    function onlyUnique(value, index, self) {
      return self.indexOf(value) === index;
    }

    for (let index = 0; index < $gallery.length; index++) {
      const element = $gallery[index];

      if (!day.includes(element.dataset.day)) {
        day.push(element.dataset.day)
      }
      if (!id.includes(element.dataset.id)) {
        id.push(element.dataset.id)
      }

      $('.filter').append(`<option value="${element.dataset.day}">${element.dataset.day}</option>`);
    }

    function sortOrder(sortby) {
      $gallery.sort(function (a, b) {
        var $a = $(a),
          $b = $(b);

        if ($a.data(sortby) < $b.data(sortby)) {
          return -1;
        } else if ($a.data(sortby) > $b.data(sortby)) {
          return 1;
        }

        return 0;
      });

      $(".gallery").append($gallery);
    }

    function filter(e) {
      var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
      $('.gallery-item').hide().filter(function () {
        return regex.test($(this).data(sortby))
      }).show();
    }

    $(".sort-gallery").click(function (e) {
      $('.gallery-item').show();
      sortby = e.target.dataset.sortby;
      let obj = eval(sortby);
      $('.filter').empty(),
        $('.filter').append(new Option('Selecione uma opção', ''));

      obj.map((item) => {
        $('.filter').append(new Option(item, item))
      }, [])

      sortOrder(sortby);
    })

    const sortByDay = document.getElementsByClassName('sort-gallery')[0];
    $(sortByDay).trigger('click');

    $(".filter").change(function (e) {
      filter(e.target.value)
    });

    sortOrder(sortby);
  },
  dateSwitch: function () {
    $('.date-switch a').on('click', function (e) {
      let date = e.target.dataset.date;
      $(this).closest('ul').children().removeClass('active');

      if ($(this).parent().is('.active')) {
        $(this).parent().removeClass('active')
      } else {
        $(this).parent().addClass('active')
      }

      $(`.palestras > li:not([data-date="${date}"])`).addClass('d-none');
      $(`.palestras > li[data-date="${date}"]`).removeClass('d-none');

      e.preventDefault();
    });
  },
  menuMobile: function () {

    // Abrir e fechar menu mobile
    $("header").on('click touch', '.btnMobile', function () {
      var btn = $(this),
        region = $('header .menu');
      if (btn.hasClass('active')) {
        btn.removeClass('active');
        region.removeClass('mobile');
        region.find('ul.active').removeClass('active');
        // Remove complemento do menu mobile
        region.find('.subMobile').remove();
      } else {
        btn.addClass('active');
        region.addClass('mobile');
        // Adiciona complemento do menu mobile
        region.find('nav > ul').append('<div class="subMobile"><div class="subNav"></div><div class="subRedes"><p>Siga-nos</p></div></div>');
        region.find('nav > ul .subRedes').append($('footer .footer ul.redes').clone());
        region.find('nav > ul .subNav').append($('header .topo nav').clone());
        region.find('nav > ul .subRedes').find('span').remove();
      }
    });

    //Abrir e fechar submenus        
    // $("header nav").on('click touch', 'a', function(){
    //     if ($(window).width() < 992){
    //         var sub = $(this).parent().find('ul'),
    //         subs = $('header nav > ul li ul');
    //         if(sub.is(':hidden')){
    //             subs.slideUp();
    //             sub.slideDown();
    //         }else{                
    //             sub.slideUp();
    //         }
    //     } 
    // });               

    // Fecha Menu se fizer resize acima de resolução Tablet
    $(window).resize(function () {
      if ($(window).width() > 992 && $('.btnMobile').hasClass('active')) {
        $('.btnMobile').trigger('click');
      }
    });
  },
  buscaHeader: function () {
    var topo = $('header .topo'),
      busca = topo.find('.busca'),
      btn = $('.mobile.icon-search');

    btn.on('click touch', function (e) {
      e.preventDefault();
      busca.toggle();
      // if(!topo.hasClass('active')){
      //     e.preventDefault();
      //     topo.addClass('active');
      // } 
    });
    // $(window).on("click touch", function(event){		
    //     if ( 
    //         busca.has(event.target).length == 0
    //         &&
    //         !busca.is(event.target)
    //         &&
    //         btn.has(event.target).length == 0
    //         &&
    //         !btn.is(event.target)

    //     ){
    //         topo.removeClass('active');
    //     } 
    // });

  },
  buscaAjax: function () {
    //
    // Ajax através após o submit do form
    //
    $('.formBusca').submit(function () {
      var urlSearch = $('.formBusca').attr('action') + '?' + $('.formBusca, .filtrosBusca, .formOrdenacao').serialize();

      $('body').append('<div class="loadingAjax"><div class="loader"></div></div>');
      $.get(urlSearch, function (data) {
        $('body').find('.targetMain').html($(data).find('.targetMain').html());
        $('.formOrdenacao #ordenacao').val($('.formOrdenacao #ordenacao').val());
      }).done(function () {
        $('.loadingAjax').remove();
      });

      return false;
    });


    //
    // Carrega Ordenação
    //
    $('body').on('change', '#ordenacao', function () {
      var val = $(this).val();
      val = val.split('|');
      var parent = $(this).parents('form');
      parent.find('.sort_by').val(val[0])
      parent.find('.sort_order').val(val[1]);
      $('.formBusca').submit();
    });

    //
    // Carrega Filtro
    //
    $('body').on('change', '.filtrosBusca', function () {
      $('.formBusca').submit();
    });


  },
  agendaHome: function () {
    var agenda = $('section.blocoAgenda');
    agenda.on('click touch', '.filtro li', function () {
      //agenda.find('.filtro li').removeClass('active');
      var filtro = $(this).prop('class'),
        grupos = agenda.find('.eventos .grupo'),
        itens = agenda.find('.eventos .item');
      itens.fadeOut('fast');
      grupos.fadeOut('fast');
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        itens.fadeIn('fast');
        grupos.fadeIn('fast');
      } else {
        agenda.find('.filtro li').removeClass('active');
        $(this).addClass('active');
        $.each(itens, function (i, item) {
          if ($(item).hasClass(filtro)) {
            $(item).closest('.grupo').fadeIn('fast');
            $(item).fadeIn('fast');
            $(item).addClass('active');
          }
        });
      }

      //     grupos.hide();
      //   // itens.is(":visible").parent().show();
      //   $($(itens.is(":visible")).closest('.grupo')).show();
      //     console.log(itens.is(":visible"));
      //     console.log();

    });
  },
  leiaMais: function () {
    $('body').on('click', '.loadMore a', function () {
      var self = $(this);
      if (!$(this).hasClass('carregando')) {
        $(this).text('Carregando...').addClass('carregando').stop().animate({
          'opacity': '0.7'
        }, 300);
        var url = $(this).parents('.posts').attr('data-url');
        var page = parseInt($(this).attr('data-atual'));
        var pageTotal = parseInt($(this).attr('data-total'));
        page = page + 1;

        $(this).attr('data-atual', page);

        var op = '?';
        var opv = url.includes("?");
        if (opv) {
          op = '&';
        }

        let type = url.replace('/','');

        url = url + op + 'page=' + page;

        if(type === 'noticias') {
          self.removeClass('carregando');

          $.get(`/api/noticias?_format=json&page=${page}`, function (res) {
            if(res.length) {
              let $html = '<div class="row">';

              res.map(item => {
                console.log(item)
                $html += `
                  <div class="col-lg-6 item">
                    <a class="img"
                      style="background-image:url(${item.field_imagem[0].url});"
                      href="${item.path[0].alias}"
                      title="${item.title[0].value}">
                      <img src="/themes/casa_firjan/statics/img/img14x9.gif">
                    </a>
                    <p class="textCat">${item.created[0].value.split("T")[0].split('-').reverse().join('/')}</p>
                    <a class="text20"
                      href="${item.path[0].alias}">${item.title[0].value}</a>
                  </div>
                `;
              })

              $html += '</div>';

              self.text('Carregar mais').stop().animate({
                'opacity': '1'
              }, 300);

              setTimeout(function() {
                $('body').find('.target').append($html);
              }, 500);              
            }
          })
        } else {
          $.get(url, function (html) {
            $('body').find('.target').append($(html).find('.target').html());
  
            self.removeClass('carregando');
            if (page < pageTotal) {
              self.text('Carregar mais').stop().animate({
                'opacity': '1'
              }, 300);;
            } else {
              self.css({
                'display': 'none'
              })
            }
          })
        }
      }

    });
  },
  leiaMaisBusca: function () {
    $('body').on('click', '.loadMore a', function () {
      var self = $(this);
      console.log('test');
      if (!$(this).hasClass('carregando')) {
        $(this).text('Carregando...').addClass('carregando').stop().animate({
          'opacity': '0.7'
        }, 300);
        var url = $(this).parents('.posts').attr('data-url');
        var page = parseInt($(this).attr('data-atual'));
        var pageTotal = parseInt($(this).attr('data-total'));
        page = page + 1;

        $(this).attr('data-atual', page);

        var op = '?';
        var opv = url.includes("?");
        if (opv) {
          op = '&';
        }

        url = $('.formBusca').attr('action') + '?' + $('.formBusca, .filtrosBusca, .formOrdenacao').serialize() + '&page=' + page;
        console.log(url);
        $.get(url, function (html) {
          $('body').find('.target').append($(html).find('.target').html());

          self.removeClass('carregando');
          if (page < pageTotal) {
            self.text('Carregar mais').stop().animate({
              'opacity': '1'
            }, 300);;
          } else {
            self.css({
              'display': 'none'
            })
          }
        })
      }

    });
  },
  leiaMaisAgenda: function () {
    $('.loadMore a').click(function () {
      var self = $(this);
      if (!$(this).hasClass('carregando')) {
        $(this).text('Carregando...').addClass('carregando').stop().animate({
          'opacity': '0.7'
        }, 300);
        var url = $(this).parents('.posts').attr('data-url');
        var page = parseInt($(this).attr('data-atual'));
        var pageTotal = parseInt($(this).attr('data-total'));
        page = page + 1;

        $(this).attr('data-atual', page);

        url = url == '/agenda' ? url + '?page=' + page : url + '&page=' + page;
        $.get(url, function (html) {
          $(html).find('.target .dateGroup').each(function () {
            if ($("div[data-date='" + $(this).attr('data-date') + "']").length) {
              $("div[data-date='" + $(this).attr('data-date') + "']").find('.dateContent').append($(this).find('.dateContent').html());
            } else {
              $('body').find('.target').append($(this).html());
            }
          })

          //$("#"+)
          //$('body').find('.target').append($(html).find('.target').html());

          self.removeClass('carregando');
          if (page < pageTotal) {
            self.text('Carregar mais').stop().animate({
              'opacity': '1'
            }, 300);;
          } else {
            self.css({
              'display': 'none'
            })
          }
        })
      }

    });
  },
  // carouselInstagram: function(){
  //     $.get('https://api.instagram.com/v1/users/self/media/recent/?access_token=7557612719.014fc1a.2502511fadd74900b5a61bca15f55722', function( data ) {
  //     console.log(data);
  //       $(data.data).each(function(index, value){
  //           var item = '<a href="'+value.link+'" target="_blank" class="item">  <img class="owl-lazy" data-src="'+value.images.standard_resolution.url+'" alt="Foto">  <div class="hover"> <div class="numeros"><span><i class="icon-heart"></i></i>'+value.likes.count+'</span><span><i class="icon-comment"></i>'+value.comments.count+'</span></div>	<p class="text">'+value.caption.text+'</p> </div></a>';
  //           $('.carouselInstagram').append(item);
  //       })           
  //     }).always(function() {
  //         $(".carouselInstagram").owlCarousel({            
  //             lazyLoad:true,
  //             loop:true,
  //             margin: 0,
  //             center: true,
  //             nav: false,
  //             video: false,
  //             dots: false,
  //             autoWidth:true
  //         })
  //   });
  // },
  testaCPF: function (strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;
    return true;
  },
  instagramTool: function () {
    if ($('.owl-carousel[data-instagram]')) {
      var carousel = $('.owl-carousel[data-instagram]'),
        account = carousel.data('instagram'),
        url = 'https://plugin.gm5.com.br/instagram/api?account=' + account;
      $.get(url, function (data) {
        $.each(data, function (k, v) {
          var likes = v.like_count > 0 ? '<span class="likes"><i class="icon-heart"></i><p>' + v.like_count + '</p></span>' : '',
            comments = v.comments_count > 0 ? '<span class="comments"><i class="icon-comment"></i><p>' + v.comments_count + '</p></span>' : '',
            item = '<a class="owl-lazy" data-src="' + v.media_url + '" href="' + v.permalink + '" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/><span>' + likes + comments + '<span class="caption">' + v.caption + '</span></span></a>';
          carousel.append(item);
        });
      }).done(function () {
        carousel.find('.loadingCarousel').remove();
        carousel.owlCarousel({
          items: 6,
          dots: false,
          nav: true,
          lazyLoad: true,
          loop: true,
          margin: 10,
          responsive: {
            0: {
              items: 2
            },
            768: {
              items: 4
            },
            992: {
              items: 6
            }
          }
        });
      });
    }
  },
  avisoCookies: function () {

    if (!localStorage.csFirjanCookieLgpd) {
      document.querySelector(".box-cookies").classList.remove('hide');
    }

    const acceptCookies = () => {
      document.querySelector(".box-cookies").classList.add('hide');
      localStorage.setItem("csFirjanCookieLgpd", "accept");
    };

    const btnCookies = document.querySelector(".btn-cookies");

    btnCookies.addEventListener('click', acceptCookies);

  }
}
