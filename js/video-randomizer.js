/** 
 * start when the browser has finished parsing but is still loading sub-resources (like videos)
 * not needed in JSFiddle as you can choose it in the options (onDomready)
 *
 * document.onreadystatechange = function () {
 *     if (document.readyState == "interactive") {    
 **/
    
// build up your storage for video urls here 
// leave out the file extension, we will let the browser decide which type it can play.
// also note how I left out the 'http:' part. we don't need it, the browser automatically
// decides if he needs http or https.
var videoStorage = [ 
    'video/shark',
	'video/flowers',
	'video/pony'
	
	
],
    video = document.querySelector('video'),
    // choose one random url from our storage as the active video
    activeVideoUrl = videoStorage[Math.round(Math.random() * (videoStorage.length - 1))];        
        
// check which file extension your browser can play and set the video source accordingly
if(video.canPlayType('video/webm')) {
    video.setAttribute('src', activeVideoUrl + '.mp4');
} else if(video.canPlayType('video/mp4')) {
    video.setAttribute('src', activeVideoUrl + '.webm');
}
    /*}
}*/