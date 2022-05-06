/**
 * 
 *  @file: main.js
 * 
 *  @purpose: in order to add javascript features to the website 
 * 
 */
'use strict';


// wait until document is loaded and initialized a auto loaded class

/**
 *  
 *  @function: typeWritter
 *
 * 
 * @purpose: to type write text on the screen
 *  
 */


const typeWritter = (element, text, speed) => {

    let i = 0;
    let timer = setInterval(() => {
        if (i < text.length) {
            // check the length and if the charcter is a space 
            text[i] === " " ? element.innerHTML += "&nbsp" : element.innerHTML += text[i];
            i++;
        } else {
            clearInterval(timer);
        }
    }, speed);
}

document.addEventListener("DOMContentLoaded", function () {

    // element that we will write our captions to.
    const ideasCaption = document.getElementById('idea-text');
    const secondMessage = "What your next idea?";
    const secondaryMessage = typeWritter(ideasCaption, secondMessage, 400);

    // some elements for some ui effects

    const skillsContainer = document.getElementById('half');

    const frontEnd = document.getElementById('frontend-panel');
    const backEnd = document.getElementById('backend-panel');
    const tools = document.getElementById('tools-panel');
    const frameworks = document.getElementById('frameworks-panel');

});