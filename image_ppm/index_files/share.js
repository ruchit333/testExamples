//requires jQuery 1.4 or higher for now
$(document).ready(function(){$(".hukd-share-button").replaceWith(function(){return '<iframe class="hukd-share-button" frameborder="0" style="height: 22px; width: 100px;" transparent="transparent" src="'+this.href.replace("/social/share","/social/share-button")+'"></iframe>';});});