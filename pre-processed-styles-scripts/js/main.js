
/**
 * main.js
 **/
$(function() {

  /**
   * Sticky Footer
   **/
  var footerHeight = $('footer.footer').height();
  $('body').css('margin-bottom', (footerHeight+50) + 'px');

  /**
   * Header 
   **/
  var windowWidth = $(window).width();
  var containerWidth = $("body .container").width();
  var gutterWidth = (windowWidth - containerWidth) / 2;
  $(".navbar > div > ul > li").each(function() {
    var linkText = $(this).children('a:nth-child(1)').text();
    $(this).addClass("dropdown");
    $(this).find("ul.sub-menu").addClass("dropdown-menu");
    /**
     * Only show white caret if a sub menu is present 
     **/
    $(this).each(function(){
      var hasSubMenu = $(this).has('ul').length;
      if (hasSubMenu > 0) {
        $(this).children('a:nth-child(1)').html(linkText + '<i class="fa fa-caret-down hidden"></i>');
      }
    });    
  });
  if ($("body").height() > $(window).height()) {
    $(".sub-menu").css({
      width: windowWidth + "px",
      left: (gutterWidth - 14) * -1 + "px",
      right: (gutterWidth - 14) + "px",
      padding: "0 " + (gutterWidth - 14) + "px 20px"
    });
  } else {
    $(".sub-menu").css({
      width: (windowWidth + 16) + "px",
      left: (gutterWidth + 5) * -1 + "px",
      right: (gutterWidth + 5) + "px",
      padding: "0 " + (gutterWidth + 5) + "px 20px"
    });
  }
  $(".navbar > div > ul li ul ul").each(function() {
    $(this).find("li").unwrap("<ul></ul>");
  });
  $(".navbar > div > ul li").each(function() {
    var lis = $(this).find("li");
    var i = 0;
    while (i < lis.length) {
      lis.slice(i, i + 3).wrapAll("<div class='col-sm-3'></div>");
      i += 3;
    }
    $(this).mouseover(function() {
      $(this).addClass("open");
      $(this).find(".dropdown-toggle").attr("aria-expanded", "true");
      $(this).find('i').removeClass('hidden');
    });
    $(this).mouseleave(function() {
      $(this).removeClass("open");
      $(this).find(".dropdown-toggle").attr("aria-expanded", "false");
      $(this).find('i').addClass('hidden');
    });
  });

  /**
   * Body
   **/
  $(".content img").addClass("img-responsive");
  $('.content h1').siblings('h1:first-child').remove();

  /**
   * Auto Generate Meta Description for Page Based on First 152 Characters of Page Content
   **/
  var description = $('meta[name=description]').attr("content");
  var metaDesc = $('.content').html()
    .replace(/(\r\n|\n|\r|)/g, '') // remove all line breaks
    .replace(/(\<h1\>.*\<\/h1\>)/g,'') // remove <h1> tags and their contents
    .replace(/\s\S+\=(["'])(\\?.)*?\1/g,'') // remove all html attributes
    .replace(/((<|<\/)\w+\>)/g, ' ') // replace all html tags with single spaces
    .replace(/\s\s+/g, ' ') // replace all double spaces with single spaces
    .replace(/^\s/g, '') // remove single space at the beginning of the string
    .slice(0, 154); // only use the first 154 characters
  if (!description) { // if meta description is not set...
    $('head').append('<meta name="description" content="' + metaDesc + '…">');
  }

  /**
   * Right Rail
   **/
  $(".right-rail aside").each(function() {
    var rrTitleLabel = $(this).find("h3:first-child").text();
    var rrTitle = rrTitleLabel.replace(/(\[(.*)\]\s|\[(.*)\])/g, "");
    var rrWidth = $(this).width();
    $(this).find("h3:first-child").text(rrTitle);
    $(this).find('video').css('max-width',rrWidth + 'px');
    $(this).find('img').css('max-width',rrWidth + 'px');
  });

  /**
   * Footer Social Nav
   * Strips the domain from the href attribute and sets it to a Font Awesome icon
   **/
  $(".footer-icons ul li a").each(function() {
    var socialLink = $(this).attr("href");
    var stripSocialDomain = socialLink.replace(/^((.*\.)|(.*\/))([a-z0-9\-]+)\.([a-z]+).*/i, "$4");
    $(this).html("<i class=\"fa fa-" + stripSocialDomain + " fa-2x\"><span class=\"sr-only sr-only-focusable\">" + stripSocialDomain + "</span></i>").attr("target", "_blank");
  });
});