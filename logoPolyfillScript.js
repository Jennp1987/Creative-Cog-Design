/*eslint-env browser*/
Element.prototype.backgroundClipPolyfill = function () {
	"use strict";
  var a = arguments[0],
      d = document,
      b = d.body,
      el = this;

  function hasBackgroundClip() {
    return b.style.webkitBackgroundClip != undefined;
  }
  //for in loop. Loops through the properties of an object.
  function addAttributes(el, attributes) {
//looping throuh key/value pairs in objs
    for (var key in attributes) {
      el.setAttribute(key, attributes[key]);
    }
  }
  
  function createSvgElement(tagname) {
    return d.createElementNS('http://www.w3.org/2000/svg', tagname);
  }
  
  function createSVG() {
    var a = arguments[0],
        svg = createSvgElement('svg'),
        pattern = createSvgElement('pattern'),
        image = createSvgElement('image'),
        text = createSvgElement('text'),
		tspan = createSvgElement('tspan');
    
    // Add attributes to elements
    addAttributes(pattern, {
      'id' : a.id,
      'patternUnits' : 'userSpaceOnUse',
      'width' : a.width,
      'height' : a.height
    });
    
    addAttributes(image, {
      'width' : a.width,
      'height' : a.height
    });
    image.setAttributeNS('http://www.w3.org/1999/xlink', 'xlink:href', a.url);
    
    addAttributes(text, {
      'x' : 0,
      'y' : 80,
      'class' : a['class'],
      'style' : 'fill:url(#' + a.id + ');'
    });
	//tspan
	addAttributes(tspan, {
	  'x' : 0,
      'y' : 80,
	  'class' : a['class']  
	});
    
    // Set text
    text.textContent = a.text;
//	tspan.textContent = a.tspan;
      
    // Add elements to pattern
    pattern.appendChild(image);
      
    // Add elements to SVG
    svg.appendChild(pattern);
    svg.appendChild(text);
	svg.appendChild(tspan);
    
    return svg;
  }
  
  /*
   * Replace the element if background-clip
   * is not available.
   */
  if (!hasBackgroundClip()) {
    var img = new Image();
    img.onload = function() {
      var svg = createSVG({
        'id' : a.patternID,
        'url' : a.patternURL,
        'class' : a['class'],
        'width' : this.width,
        'height' : this.height,
        'text' : el.textContent
      });
      
      el.parentNode.replaceChild(svg, el);
    }
    img.src = a.patternURL;
  }
};

var element = document.querySelector('.headline'); 

/*
 * Call the polyfill
 *
 * patternID : the unique ID of the SVG pattern
 * patternURL : the URL to the background-image
 * class : the css-class applied to the SVG
 */
element.backgroundClipPolyfill({
  'patternID' : 'mypattern',
  'patternURL' : 'https://jennp1987.github.io/Creative-Cog-Design/images/creativeCogGradient.png',
  'class' : 'headline'
});
