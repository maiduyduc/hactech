////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed = slidespeed
leftrightslide = '<nobr>' + leftrightslide.join(imagegap) + '</nobr>'
var iedom = document.all || document.getElementById
if (iedom)
	document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">' + leftrightslide + '</span>')
var actualwidth = ''
var cross_slide, ns_slide

function fillup() {
	if (iedom) {
		cross_slide = document.getElementById ? document.getElementById("slide1") : document.all.slide1
		cross_slide2 = document.getElementById ? document.getElementById("slide2") : document.all.slide2
		cross_slide.innerHTML = cross_slide2.innerHTML = leftrightslide
		actualwidth = document.all ? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
		cross_slide2.style.left = actualwidth + slideshowgap + "px"
	}
	else if (document.layers) {
		ns_slide = document.ns_slidemenu.document.ns_slidemenu2
		ns_slide2 = document.ns_slidemenu.document.ns_slidemenu3
		ns_slide.document.write(leftrightslide)
		ns_slide.document.close()
		actualwidth = ns_slide.document.width
		ns_slide2.left = actualwidth + slideshowgap
		ns_slide2.document.write(leftrightslide)



		ns_slide2.document.close()
	}
	lefttime = setInterval("slideleft()", 30)
}
window.onload = fillup

function slideleft() {
	if (iedom) {
		if (parseInt(cross_slide.style.left) > (actualwidth * (-1) + 8))
			cross_slide.style.left = parseInt(cross_slide.style.left) - copyspeed + "px"
		else
			cross_slide.style.left = parseInt(cross_slide2.style.left) + actualwidth + slideshowgap + "px"

		if (parseInt(cross_slide2.style.left) > (actualwidth * (-1) + 8))
			cross_slide2.style.left = parseInt(cross_slide2.style.left) - copyspeed + "px"
		else
			cross_slide2.style.left = parseInt(cross_slide.style.left) + actualwidth + slideshowgap + "px"

	}
	else if (document.layers) {
		if (ns_slide.left > (actualwidth * (-1) + 8))
			ns_slide.left -= copyspeed
		else
			ns_slide.left = ns_slide2.left + actualwidth + slideshowgap

		if (ns_slide2.left > (actualwidth * (-1) + 8))
			ns_slide2.left -= copyspeed
		else
			ns_slide2.left = ns_slide.left + actualwidth + slideshowgap
	}
}


if (iedom || document.layers) {
	with (document) {
		document.write('<table border="0" style="padding-left:10px;" cellspacing="0" cellpadding="0"><td>')
		if (iedom) {
			write('<div style="position:relative;width:' + sliderwidth + ';height:' + sliderheight + ';overflow:hidden;">')
			write('<div style="position:absolute;width:' + sliderwidth + ';height:' + sliderheight + '; line-height:' + sliderheight + '; background-color:' + slidebgcolor + '" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')
			write('<div id="slide1" style="position:absolute;left:10px;top:0px"></div>')
			write('<div id="slide2" style="position:absolute;left:-1000px;top:0px"></div>')
			write('</div></div>')
		}
		else if (document.layers) {
			write('<ilayer width=' + sliderwidth + ' height=' + sliderheight + ' name="ns_slidemenu" bgColor=' + slidebgcolor + '>')
			write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
			write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
			write('</ilayer>')
		}
		document.write('</td></table>')
	}
}
