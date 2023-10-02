/*
 * CONTROLE DE ESCOPO
 * Projeto: Casa Firjan
 * Desenvolvimento: GM5
 */

var attrController = $('main[data-controller]').attr('data-controller');

var Controller = {
  getController: function () {
    if ($('main[data-controller]').length > 0) {
      eval('Controller.' + attrController + '();');
    }
  },
  global: function () {
    //
    // Menu Mobile
    //
    Util.menuMobile();

    Util.dateSwitch();

    Util.gallery();
    
    Util.tabs();
    
    Util.checkSubmenuParentActiveTrail();
    
    Util.filter();
    //
    // Caixa de busca do header
    //
    Util.buscaHeader();

    function MTel(v){
      v=v.replace(/\D/g,"");   	         			//Remove tudo o que não é dígito
      v=v.replace(/(\d{2})(\d)/,"($1) $2")       	//Coloca parênteses em volta dos dois primeiros dígitos
      v=v.replace(/(\d{3})(\d{1,4})$/,"$1-$2")   	//Coloca hífen entre o quarto e o quinto dígitos
      return v;
    }

    function execmascara(){
      v_obj.value=v_fun(v_obj.value)
    }
    
    function Mascara(o,f){
      v_obj=o
      v_fun=f
      setTimeout(execmascara, 1)
  	}

    ['keydown', 'keypress', 'keyup'].forEach(event => {
      $('[name*="telefone"], [name*="celular"], #edit-celular--2').on(event, function () {
        Mascara(this, MTel);
      });	  
    });

    // Nova busca

    $('.search').on('change','[name*="categoria"]', function(e) {
      document.getElementById("edit-search-api-fulltext").value = "";
    });  
    
    $('.search').on('change','[name*="fulltext"]', function(e) {
      document.getElementById("edit-field-categoria").value = "";
    });      

    //
    // Fecha Mensagem
    //
    $('.msg').on('click toch', '.icon-close', function () {
      $(this).closest('.msg').fadeOut();
    })

    //
    // Mascara celular Newsletter
    //
    $('.newsletter .celular').mask('(00) 00000-0000');


    //
    // Autochange dos cursos
    //
    $('#filtroCategoria, #filtroTurno, #filtroStatus').on('change', function () {
      window.location.href = $(this).val();
    });
    
    //
    // Caption para Imagens
    //
    $('img').each(function(i){
      if($(this).attr('data-caption')){
       $(this).wrap('<figure style="max-width:'+$(this).width()+'px"></figure>').after('<figcaption>'+$(this).attr('data-caption')+'</figcaption>');
      }
    })

    let links = document.getElementsByTagName('a');

    for (let index = 0; index < links.length; index++) {
      const element = links[index];
      if(element && element.attributes.href) {
        if(element.attributes.href.value.includes('https://casafirjan.com.brhttps://casafirjan.com.br')) {
          element.attributes.href.value = element.attributes.href.value.replace('https://casafirjan.com.brhttps://casafirjan.com.br','')
        }
      }
    }  

    // 

    $('.menu--menu-principal a').on('click', function(e){
      $(this).attr('target', $(this).parent().attr('data-target'));
    });     
    
    //
    // Fixed Header
    //
    $(window).scroll(function(){
      var menu = $('.menu'),
          scroll = $(window).scrollTop();
    
      if (scroll >= 136) menu.addClass('fixed');
      else menu.removeClass('fixed');
    });
    
    //
    // Ajax para o leia mais
    //
    Util.leiaMais();
    
    
    //
    // Alinhamento das imagens com legenda
    //
    $('figure img[data-align="left"]').each(function() {
         $(this).closest('figure').css({'float': 'left', 'margin-right': '10px'});
    })
    $('figure img[data-align="right"]').each(function() {
         $(this).closest('figure').css({'float': 'right', 'margin-left': '10px'});
    })

    Util.avisoCookies();
    
    // 
    
    function slugify(s, opt) {
      s = String(s);
      opt = Object(opt);
      
      var defaults = {
        'delimiter': '-',
        'limit': undefined,
        'lowercase': true,
        'replacements': {},
        'transliterate': (typeof(XRegExp) === 'undefined') ? true : false
      };
      
      // Merge options
      for (var k in defaults) {
        if (!opt.hasOwnProperty(k)) {
          opt[k] = defaults[k];
        }
      }
      
      var char_map = {
        // Latin
        'À': 'A', 'Á': 'A', 'Â': 'A', 'Ã': 'A', 'Ä': 'A', 'Å': 'A', 'Æ': 'AE', 'Ç': 'C', 
        'È': 'E', 'É': 'E', 'Ê': 'E', 'Ë': 'E', 'Ì': 'I', 'Í': 'I', 'Î': 'I', 'Ï': 'I', 
        'Ð': 'D', 'Ñ': 'N', 'Ò': 'O', 'Ó': 'O', 'Ô': 'O', 'Õ': 'O', 'Ö': 'O', 'Ő': 'O', 
        'Ø': 'O', 'Ù': 'U', 'Ú': 'U', 'Û': 'U', 'Ü': 'U', 'Ű': 'U', 'Ý': 'Y', 'Þ': 'TH', 
        'ß': 'ss', 
        'à': 'a', 'á': 'a', 'â': 'a', 'ã': 'a', 'ä': 'a', 'å': 'a', 'æ': 'ae', 'ç': 'c', 
        'è': 'e', 'é': 'e', 'ê': 'e', 'ë': 'e', 'ì': 'i', 'í': 'i', 'î': 'i', 'ï': 'i', 
        'ð': 'd', 'ñ': 'n', 'ò': 'o', 'ó': 'o', 'ô': 'o', 'õ': 'o', 'ö': 'o', 'ő': 'o', 
        'ø': 'o', 'ù': 'u', 'ú': 'u', 'û': 'u', 'ü': 'u', 'ű': 'u', 'ý': 'y', 'þ': 'th', 
        'ÿ': 'y',
    
        // Latin symbols
        '©': '(c)',
    
        // Greek
        'Α': 'A', 'Β': 'B', 'Γ': 'G', 'Δ': 'D', 'Ε': 'E', 'Ζ': 'Z', 'Η': 'H', 'Θ': '8',
        'Ι': 'I', 'Κ': 'K', 'Λ': 'L', 'Μ': 'M', 'Ν': 'N', 'Ξ': '3', 'Ο': 'O', 'Π': 'P',
        'Ρ': 'R', 'Σ': 'S', 'Τ': 'T', 'Υ': 'Y', 'Φ': 'F', 'Χ': 'X', 'Ψ': 'PS', 'Ω': 'W',
        'Ά': 'A', 'Έ': 'E', 'Ί': 'I', 'Ό': 'O', 'Ύ': 'Y', 'Ή': 'H', 'Ώ': 'W', 'Ϊ': 'I',
        'Ϋ': 'Y',
        'α': 'a', 'β': 'b', 'γ': 'g', 'δ': 'd', 'ε': 'e', 'ζ': 'z', 'η': 'h', 'θ': '8',
        'ι': 'i', 'κ': 'k', 'λ': 'l', 'μ': 'm', 'ν': 'n', 'ξ': '3', 'ο': 'o', 'π': 'p',
        'ρ': 'r', 'σ': 's', 'τ': 't', 'υ': 'y', 'φ': 'f', 'χ': 'x', 'ψ': 'ps', 'ω': 'w',
        'ά': 'a', 'έ': 'e', 'ί': 'i', 'ό': 'o', 'ύ': 'y', 'ή': 'h', 'ώ': 'w', 'ς': 's',
        'ϊ': 'i', 'ΰ': 'y', 'ϋ': 'y', 'ΐ': 'i',
    
        // Turkish
        'Ş': 'S', 'İ': 'I', 'Ç': 'C', 'Ü': 'U', 'Ö': 'O', 'Ğ': 'G',
        'ş': 's', 'ı': 'i', 'ç': 'c', 'ü': 'u', 'ö': 'o', 'ğ': 'g', 
    
        // Russian
        'А': 'A', 'Б': 'B', 'В': 'V', 'Г': 'G', 'Д': 'D', 'Е': 'E', 'Ё': 'Yo', 'Ж': 'Zh',
        'З': 'Z', 'И': 'I', 'Й': 'J', 'К': 'K', 'Л': 'L', 'М': 'M', 'Н': 'N', 'О': 'O',
        'П': 'P', 'Р': 'R', 'С': 'S', 'Т': 'T', 'У': 'U', 'Ф': 'F', 'Х': 'H', 'Ц': 'C',
        'Ч': 'Ch', 'Ш': 'Sh', 'Щ': 'Sh', 'Ъ': '', 'Ы': 'Y', 'Ь': '', 'Э': 'E', 'Ю': 'Yu',
        'Я': 'Ya',
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'yo', 'ж': 'zh',
        'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o',
        'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h', 'ц': 'c',
        'ч': 'ch', 'ш': 'sh', 'щ': 'sh', 'ъ': '', 'ы': 'y', 'ь': '', 'э': 'e', 'ю': 'yu',
        'я': 'ya',
    
        // Ukrainian
        'Є': 'Ye', 'І': 'I', 'Ї': 'Yi', 'Ґ': 'G',
        'є': 'ye', 'і': 'i', 'ї': 'yi', 'ґ': 'g',
    
        // Czech
        'Č': 'C', 'Ď': 'D', 'Ě': 'E', 'Ň': 'N', 'Ř': 'R', 'Š': 'S', 'Ť': 'T', 'Ů': 'U', 
        'Ž': 'Z', 
        'č': 'c', 'ď': 'd', 'ě': 'e', 'ň': 'n', 'ř': 'r', 'š': 's', 'ť': 't', 'ů': 'u',
        'ž': 'z', 
    
        // Polish
        'Ą': 'A', 'Ć': 'C', 'Ę': 'e', 'Ł': 'L', 'Ń': 'N', 'Ó': 'o', 'Ś': 'S', 'Ź': 'Z', 
        'Ż': 'Z', 
        'ą': 'a', 'ć': 'c', 'ę': 'e', 'ł': 'l', 'ń': 'n', 'ó': 'o', 'ś': 's', 'ź': 'z',
        'ż': 'z',
    
        // Latvian
        'Ā': 'A', 'Č': 'C', 'Ē': 'E', 'Ģ': 'G', 'Ī': 'i', 'Ķ': 'k', 'Ļ': 'L', 'Ņ': 'N', 
        'Š': 'S', 'Ū': 'u', 'Ž': 'Z', 
        'ā': 'a', 'č': 'c', 'ē': 'e', 'ģ': 'g', 'ī': 'i', 'ķ': 'k', 'ļ': 'l', 'ņ': 'n',
        'š': 's', 'ū': 'u', 'ž': 'z'
      };
      
      // Make custom replacements
      for (var k in opt.replacements) {
        s = s.replace(RegExp(k, 'g'), opt.replacements[k]);
      }
      
      // Transliterate characters to ASCII
      if (opt.transliterate) {
        for (var k in char_map) {
          s = s.replace(RegExp(k, 'g'), char_map[k]);
        }
      }
      
      // Replace non-alphanumeric characters with our delimiter
      var alnum = (typeof(XRegExp) === 'undefined') ? RegExp('[^a-z0-9]+', 'ig') : XRegExp('[^\\p{L}\\p{N}]+', 'ig');
      s = s.replace(alnum, opt.delimiter);
      
      // Remove duplicate delimiters
      s = s.replace(RegExp('[' + opt.delimiter + ']{2,}', 'g'), opt.delimiter);
      
      // Truncate slug to max. characters
      s = s.substring(0, opt.limit);
      
      // Remove delimiter from ends
      s = s.replace(RegExp('(^' + opt.delimiter + '|' + opt.delimiter + '$)', 'g'), '');
      
      return opt.lowercase ? s.toLowerCase() : s;
    }
    
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const selected_assunto = urlParams.get('assunto');

    if(selected_assunto) {
        let assuntos = document.querySelectorAll("[name='assunto']");

        for (let i = 0; i < assuntos.length; i++) {
            console.log(slugify(assuntos[i].value))
            if(slugify(assuntos[i].value) == slugify(selected_assunto)) {
                $(assuntos[i]).prop('checked',true);
            } 
            else {
                $(assuntos[i]).prop('disabled',true);
            }
        }        
    }
    
    // GTM
    let events = [
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-report-2022-2023',
            'url': '/report-macrotendencias/report-macrotendencias-2022-2023'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-70',
            'url': '/dossies/70o-dossie-tendencias-da-blockchain'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-71',
            'url': '/dossies/71o-dossie-destaques-e-tendencias-nrf-2022'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-reportsinais-01',
            'url': '/outras-publicacoes/1o-report-sinais-de-mudanca-da-moda'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-72',
            'url': '/dossies/72o-dossie-tendencias-esg-para-2022'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-73',
            'url': '/dossies/73o-dossie-marketing-de-influencia-e-avatares-digitais'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-74',
            'url': '/dossies/74o-dossie-mercado-de-carbono-e-meta-net-zero'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-75',
            'url': '/dossies/75o-dossie-fundamentos-da-experiencia-do-usuario'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-76',
            'url': '/dossies/76o-dossie-nft-nas-empresas'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-77',
            'url': '/dossies/77o-dossie-esg-e-o-capitalismo-de-stakeholders'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-mapeamento_IC_2022',
            'url': '/mapeamento-da-industria-criativa/mapeamento-da-industria-criativa-2022'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'oficina_CCD_link_interno_56_dossie',
            'url': '/dossies/56o-dossie-empresas-nas-midias-sociais'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie_saude_talks_1',
            'url': '/dossies/dossie-especial-saude-integrada-talks'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-78',
            'url': '/dossies/78o-dossie-esg-para-lideres-do-futuro'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-tendencias-sxsw2022',
            'url': '/dossies/dossie-tendencias-sxsw-2022'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-79',
            'url': '/dossies/79o-dossie-seguranca-psicologica-nas-empresas'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-80',
            'url': '/dossies/80o-dossie-realidade-estendida-e-metaverso'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-81',
            'url': '/dossies/81o-dossie-web3-e-industrias'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-reportsinaismoda-01',
            'url': '/outras-publicacoes/1o-report-sinais-de-mudanca-da-moda'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-82',
            'url': '/dossies/82o-dossie-diversidade-e-inclusao-na-pratica'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-83',
            'url': '/dossies/83o-dossie-design-thinking-e-aprendizagem'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-84',
            'url': '/dossies/84o-dossie-economia-da-influencia-nas-empresas'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-85',
            'url': '/dossies/85o-dossie-tendencias-para-area-de-rh'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-86',
            'url': '/dossies/86o-dossie-estrategias-de-influencia-no-linkedin'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-87',
            'url': '/dossies/87o-dossie-lideranca-e-engajamento'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-regional-competitividade-pmes',
            'url': '/dossies/dossie-aquario-regional-competitividade-nas-pmes'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'report_macrotendencias_2023_2024',
            'url': '/report-macrotendencias/report-macrotendencias-2023-2024'
        },
        {
            'event': 'custom_event',
            'event_action': 'clique',
            'event_category': 'download',
            'event_label': 'btn-dossie-88',
            'url': '/dossies/88deg-dossie-blockchain-e-tokenizacao-de-ativos-nos-negocios'
        }
    ];
    
    $('.btnAzul').on('click', function(e){
        if(events.find(item => window.location.pathname === item.url)) {
            // e.preventDefault(); 
            
            let event = events.find(item => window.location.pathname === item.url);
            
            window.dataLayer.push({
                'event': event.event,
                'event_action': event.event_action,
                'event_category': event.event_category,
                'event_label': event.event_label,
            }); 
        }
        
        // $(this).unbind('click').click();
    }); 

  },
  programa: function(){
  },
  home: function () {

    $(".bannerHome").owlCarousel({
      items: 1,
      autoplay: true,
      autoplayTimeout: 10000,
      lazyLoad: true,
      loop: true,
      margin: 0,
      center: true,
      nav: true,
      video: false,
      dots: true
    })

    //
    // Bloco Agenda
    //
    Util.agendaHome();

    //
    // Carousel com fotos do Instagram
    //
    //Util.carouselInstagram();
    
    Util.instagramTool();

  },
  detalhe: function () {

  },
  noticias: function () {

  },
  agenda: function () {
    Util.agenda('#calendar');
    //
    // Ajax para o leia mais
    //
    Util.leiaMaisAgenda();
    
    //
    // Autosubmit por categoria
    //
    $('#porCategoria').find('input[type=checkbox]').on('change',function(){
      $('#porCategoria').submit();
    });
    
    //
    // Cores para o filtro dos ciclos
    //
    var inputCiclo = $('#porCiclo').find('input[type=checkbox]');
    
    inputCiclo.each( function(){
      if($(this).attr('checked')){
        $(this).find('+label').css({ 'border-color' : $(this).data('color') , 'background' : $(this).data('color') , 'color' : 'white'});
      } else {
        $(this).find('+label').css({ 'border-color' : $(this).data('color') , 'color' : $(this).data('color')});
      }
    });
    
    $('#porCiclo').find('input[type=checkbox]').on('change',function(){
      if($(this).is(':checked') == true){
        $(this).find('+label').css({ 'border-color' : $(this).data('color') , 'background' : $(this).data('color') , 'color' : 'white'});
      } else {
        $(this).find('+label').css({ 'border-color' : $(this).data('color') , 'background' : 'white' , 'color' : $(this).data('color')});
      }
      
      // Autosubmit
      $('#porCiclo').submit();
    });

    //
    // Filtro por data
    //
    var availableDates = eval($('#calendario').attr('data-days'));

    function available(date) {

      var dmy = formatDate(date);

      alert(dmy)
      if ($.inArray(dmy, availableDates) != -1) {
        return [true, "", "Available"];
      } else {
        return [false, "", "unAvailable"];
      }
    }

    let last_date = $('#porData')[0].attributes['data-last'].value.replace("'","");
    
    $("#calendario").multiDatesPicker({
      dateFormat: "yy-mm-dd",
      minDate: 0, // today 02-02-2019
      maxDate: `${last_date}`,
      defaultDate: $('#porData').attr('date-set'),
      addDates: [$('#porData').attr('date-set')],
      dayNamesMin: ['Dom.', 'Seg.', 'Ter.', 'Qua.', 'Qui.', 'Sex.', 'Sáb.', 'Dom.'],
      monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
      beforeShowDay: function (date) {
        var string = $.datepicker.formatDate('yy-mm-dd', date);
        return [availableDates != undefined && $.inArray(string, availableDates) > -1];
      },
      onSelect: function(date) {
        $('#porData').find('input[name=data_inicio]').val(date+' 00:00:00');
        $('#porData').find('input[name=data_fim]').val(date+' 23:59:59');
        $('#porData').submit();
        //$('#booking-calendar').multiDatesPicker('resetDates').multiDatesPicker('addDates', [date]);
      }
    });
  },
  taEmCasa: function () {
    $('#cpf').mask('000.000.000-00');
    $('#cnpj').mask('00.000.000/0000-00');
    $('.cpfDependente').mask('000.000.000-00');
    $('#nascimento').mask('00/00/0000', {placeholder: "__/__/____"});
    $('#telefone').mask('(00) #0000-0000');
    $('#cep').mask('00000-000');

    var form = $('form#formTaEmCasa');



      function filterFields(form){
        var topics = {'perfil0': 'pf0', 'perfil1': 'pf1', 'perfil2': 'pf2','perfil3': 'pf3','perfil4': 'pf4','perfil5': 'pf5','perfil6': 'pf6'};

        var checked = $('input.perfil:checked');
        //alert(topics[checked.attr('id')])
        $('.filedFilter').hide();
        $('.'+topics[checked.attr('id')]).show();

        if (checked.attr('id') == 'perfil0') {
          form.find('.blocoDependentes').show();
        } else {
          form.find('.blocoDependentes').hide();
        }

        if (checked.attr('id') == 'perfil0') {
          $('.comprovante').find('.label').text('Comprovante de residência:*');
          $('.comprovante').find('p').text('- Comprovante de residência com até 3 meses em nome do próprio, pai, mãe ou cônjuge');
        } else if (checked.attr('id') == 'perfil1') {
          $('.comprovante').find('.label').text('Comprovante de estudante:*');
          $('.comprovante').find('p').text('');
        } else if (checked.attr('id') == 'perfil2') {
          $('.comprovante').find('.label').text('Comprovante de vínculo com a empresa:*');
          $('.comprovante').find('p').text('');
        }
      }

      function subFilterFields(form){
        var topics = {'se_estuda0': 'estudo_botafogo', 'se_estuda1': 'aluno_medio', 'se_estuda2': 'colaborador'};

        var checked = $('input.se_estuda:checked');
        $('.filedSubFilter').hide();
        $('.'+topics[checked.attr('id')]).show();
      }

      $('.filedSubFilter').hide();
      filterFields(form);
      subFilterFields(form);

      form.on('change', 'input.perfil', function () {
        filterFields(form)

        form.find('.documentos .invalid-feedback').remove();
        form.find('.documentos input').val('');

      });

      //Adiciona dependente
      /*
    form.on('click touch', '.addDependente, .removeDependente', function () {
      var clone = $('.blocoDependentes').find('.dependente').last().clone(),
      last = $('.blocoDependentes .dependente').last(),
      dependentes = $('.blocoDependentes .dependente').length;

      // Incrementa o atributo for
      clone.find('label').attr('for', function(){
        return $(this).attr('for').substring(0, $(this).attr('for').length - 1)+dependentes;
      })

      //Inclementa o ID
      clone.find('input, select').attr('id', function(){
        return $(this).attr('id').substring(0, $(this).attr('id').length - 1)+dependentes;
      })

      //Incrementa o name
      clone.find('input, select').attr('name', function(){
        return $(this).attr('name').replace(/(\d+)+/g, function(match, number) { return parseInt(number)+1} );
      })

      if ($(this).hasClass('addDependente')) {
        clone.find('input').val('');
        clone.insertAfter(last);
      } else {
        last.remove();
      }

      if($('.blocoDependentes .dependente').length > 1){
        $('.addDependente').hide();
        $('.blocoDependentes .removeDependente').show();
      } else {
        $('.addDependente').show();
        $('.blocoDependentes .removeDependente').hide();
      }
      

      //Mascara para os novos campos
      $('.cpfDependente').mask('000.000.000-00');


    });
    */


      form.on('change', 'input.se_estuda', function () {
        subFilterFields(form)

      });


      form.submit(function(){
        var checked = $('input.perfil:checked');
      var data = $(this).serializeArray();
      erros = [];


      form.find('.invalid-feedback').remove();


      if($('#comprovante').hasClass('empty') && (checked.attr('id') == 'perfil0' || checked.attr('id') == 'perfil2' || checked.attr('id') == 'perfil1')){

          $('#comprovante').parents('.comprovante ').addClass('is-invalid');
          erros.push('Comprovante');
        }

        if(erros.length > 0){
          $(document.body).scrollTop($('#titleForm').offset().top);
          $('.msg.error').remove();
          $('<div class="msg error light">Verifique os campos abaixo marcados em vermelho.</div>').insertAfter('#titleForm');
          return false;
        }

      })



    /*




    //Se é morador de botafogo


    //Se é maior de 18 anos
    form.on('change', 'input.maiorIdade', function () {
      form.find('.blocoAutorizacao .invalid-feedback').remove();
      if ($(this).is(':checked')) {
        form.find('.blocoAutorizacao').hide();
      } else {
        form.find('.blocoAutorizacao').show();
      }
    });

    //Se possui comprovante
    form.on('change', 'input.comprovante0, input.comprovante1', function () {
      form.find('.blocoComprovante .invalid-feedback').remove();
      if ($(this).hasClass('comprovante1')) {
        form.find('.blocoComprovante').show();
      } else {
        form.find('.blocoComprovante').hide();
      }
    });



    //Validação campo file
    form.on('change', 'input[type="file"]', function () {
      var fileExtension = ['txt', 'rtf', 'pdf', 'doc', 'docx', 'odt', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'gif'];
      $(this).closest('.custom-file').find('invalid-feedback').remove();
      if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
        $(this).next().text('Nenhum arquivo encontrado');
        $(this).closest('.custom-file').append('<div style="display:block;" class="invalid-feedback">Formatos de arquivos permitidos: txt, rtf, pdf, doc, docx, odt, ppt, pptx, jpg, jpeg ou png.</div>');
      }
    });

    //$('input,select').removeAttr('required')

    form.submit(function(){
      var data = $(this).serializeArray();
      erros = [];

      form.find('.invalid-feedback').remove();

      // Tratamento campo obrigatórios
      form.find('.required').each( function(){
        var label = $(this).prev().text().replace('*', '');
        $(this).removeClass('is-invalid');
        if($(this).attr('type') == 'text' || $(this).attr('type') == 'tel' || $(this).attr('type') == 'email'){
          if($(this).val() == ''){
            erros.push(label);
            $(this).addClass('is-invalid');
          }
        }else if($(this).hasClass('radios')){
          if($(this).find('input.form-check-input:checked').length == 0){
            $(this).addClass('is-invalid');
            erros.push('Perfil');
          }
        }else if($(this).hasClass('custom-select')){
          if($(this).find('option:selected').text() == 'Selecione'){
             $(this).addClass('is-invalid');
             erros.push(label);
          }
        }
      });

      //Verificação dos campos de comprovante
      if(form.find('input[name="possui_comprovante[]"]:checked').val() == "Sim"){
        if($('.comprovante input[type="file"]')[0].files.length == 0){
          form.find('.comprovante').append('<div style="display:block;" class="invalid-feedback">Comprovante obrigatório.</div>');
          erros.push('Comprovante');
        }

      }else{
        if($('.blocoComprovante input[type="file"]')[0].files.length == 0){
          form.find('.blocoComprovante').append('<div style="display:block;" class="invalid-feedback">Comprovante obrigatório.</div>');
          erros.push('Comprovante');
        }

      }


      //Verificação se possui campos obrigatório vazios
      if(erros.length > 0){
        $(document.body).scrollTop($('#titleForm').offset().top);
        $('.msg.error').remove();
        $('<div class="msg error light">Possui campos obrigatórios que não form preenchidos.</div>').insertAfter('#titleForm')
        return false;
      }

      //Validação do CPF
      var cpf = form.find('#cpf').unmask().val();

      $('#cpf').mask('000.000.000-00');
      if(Util.testaCPF(cpf) == false){
         form.find('#cpf').addClass('is-invalid');
         form.find('#cpf').closest('.form-group').find('.invalid-feedback').remove()
         form.find('#cpf').closest('.form-group').append('<div style="display:block;" class="invalid-feedback">Digite um CPF válido.</div>');
         erros.push('CPF Inválido');
      } else {
         form.find('#cpf').removeClass('is-invalid');
         form.find('#cpf').closest('.form-group').find('.invalid-feedback').remove()
      }

      $('.cpfDependente').removeClass('is-invalid');
      $('.cpfDependente').closest('.form-group').find('.invalid-feedback').remove();


      $('.cpfDependente').each( function(){
        var cpfDependente = $(this).unmask().val();
        $('.cpfDependente').mask('000.000.000-00');
        if(cpfDependente != ''){
          if(Util.testaCPF(cpfDependente) == false){
            erros.push('CPF Inválido')
            $(this).addClass('is-invalid');
            $(this).closest('.form-group').append('<div style="display:block;" class="invalid-feedback">Digite um CPF válido.</div>');
          }
        }
      });

      //validação campo file para envio de termo
      form.find('.blocoAutorizacao .custom-file .invalid-feedback').remove();
      if(form.find('input.maiorIdade').is(':not(:checked)') && form.find('input#termo')[0].files.length == 0){
        erros.push('Termo de autorização');
        form.find('.blocoAutorizacao .custom-file').append('<div style="display:block;" class="invalid-feedback">É necessário anexar o termo.</div>')
      }

      if(erros.length > 0){
        $(document.body).scrollTop($('#titleForm').offset().top);
        $('.msg.error').remove();
        $('<div class="msg error light">Verifique os campos abaixo marcados em vermelho.</div>').insertAfter('#titleForm');
        return false;
      }


      // Checkbox Aceite
      if($('input#aceite').is(':checked') == false){
         $('input#aceite').closest('.aceite').find('.invalid-feedback').remove();
         $('input#aceite').closest('.aceite').append('<div style="display:block;" class="invalid-feedback">Você deve confirmar este item.</div>');
         return false;
      }

    });
    */
  },
  visite: function () {
    $("#tabs").tabs();
  },
  lideresDetalhe: function () {
    $('.topicoBloco').each(function(){
      var h2 = $(this).find('h2');
      h2.attr('id',h2.text());
      $('.topContent').append('<a href="#'+h2.text()+'" class="btnAzul anchorBt">'+h2.text()+'</a>');
    });
  },
  contato: function () {
    $('[name*="cpf"]').mask('000.000.000-00');
    $('[name*="nascimento"]').mask('00/00/0000', {placeholder: "__/__/____"});
    
    // var options =  {
    //   onKeyPress: function(telefone, e, field, options) {
    //     var masks = ['(00) 0000-0000', '(00) 00000-0000'];
    //     var mask = (telefone.length < 14 ) ? masks[0] : masks[1];
    //     $('[name*="telefone"], [name*="celular"]').mask(mask, options);
    // }};
    
    // $('[name*="telefone"], [name*="celular"]').mask('00000-000', options);

    // function MTel(v){
    //   v=v.replace(/\D/g,"");   	         			//Remove tudo o que não é dígito
    //   v=v.replace(/(\d{2})(\d)/,"($1) $2")       	//Coloca parênteses em volta dos dois primeiros dígitos
    //   v=v.replace(/(\d{3})(\d{1,4})$/,"$1-$2")   	//Coloca hífen entre o quarto e o quinto dígitos
    //   return v;
    // }

    // function execmascara(){
    //   v_obj.value=v_fun(v_obj.value)
    // }
    
    // function Mascara(o,f){
    //   v_obj=o
    //   v_fun=f
    //   setTimeout(execmascara, 1)
  	// }

    // let events = ['keydown', 'keypress', 'keyup'];

    // events.forEach(event => {
    //   $('[name*="telefone"], [name*="celular"]').on(event, function () {
    //     Mascara(this, MTel);
    //   });	  
    // });

    $('[name*="cep"]').mask('00000-000');

    $('form#fale-conosco').submit(function( event ) {
      $(this).find('input.submit').attr('disabled', 'disabled');
    })

    $('[name="associado"]').on('change', function () {
      let row = $(this).closest(".radios--wrapper").next();

      if($(this).val() === 'Sim') {
        $(row).addClass('d-block'),
        $(row).removeClass('d-none'),
        $("[name='empresa']").prop('required',true);
      } else {
        $(row).removeClass('d-block'),
        $(row).addClass('d-none'),
        $("[name='empresa']").removeAttr('required');
      }
    }); 
  },
  busca: function() {

    // views-exposed-form-search-page-1
  
    var btnFilter = $('.btnFilterMobile'),
    lateral = $('.lateral'),
    closeFilter = $('.lateral .text20 .icon-close'),
    btnTopo = $('.topo .mobile.icon-search, .topo .btnMobile');
    
    $('.formBusca').submit(function(){
      if($('.posts').length > 0){
        
      
      $('body').append('<div class="loadingAjax"><div class="loader"></div></div>');
      $.get( $(this).attr('action')+'?'+$('.formBusca, .filtrosBusca, .formOrdenacao').serialize(), function( data ) {
        
        
        var newHtml = $(data).find('.filterBlock').html();
        
        $('body .filterBlock').html(newHtml ? newHtml : '');
        
        $('.nResultados').html($(data).find('.nResultados').html());
        $('.posts').attr('data-url',$(data).find('.posts').attr('data-url'));
        $('.loadingAjax').remove();
      });
      return false;
      }
    });
 
    btnFilter.on('click touch', function(e){
      console.log('btn')
      e.preventDefault();
      lateral.toggle("slow");
      // if(!lateral.hasClass('open')){
      //   lateral.addClass('open');
      // }
    });
    
    closeFilter.on('click touch', function(e){
      btnFilter.trigger('click');
    });
    
    btnTopo.on('click touch', function(e){
      lateral.hide();
    });
    
    $('body').on('change','#ordenacao',function(){
      var val = $(this).val();
      val = val.split('|');
      
      
      var parent = $(this).parents('form');
      
      parent.find('.sort_by').val(val[0])
      parent.find('.sort_order').val(val[1]);
      
      $('.formBusca').submit();
    });
    
    
    $('.filtrosBusca').on('change',function(){
      $('.formBusca').submit();
    });
  },
  quem_somos: function () {
     
  }, 
  aulas_abertas: function () {
     
  },  
  o_que_e_fab_lab: function () {
     
  },  
  n_a: function () {
     
  },  
};

jQuery(document).ready(function ($) {
  Controller.global();
  Controller.getController();
});

(console.info || console.log).call(console, "%c<Dev by 🐱 GM5 Team/>", "color: green; font-weight: bold;");
