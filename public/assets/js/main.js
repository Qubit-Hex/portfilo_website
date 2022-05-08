/**
 * 
 *  @file: main.js
 * 
 *  @purpose: in order to add javascript features to the website 
 * 
 */
'use strict';


import Dial from './core/modules/dial.js';


// wait until document is loaded and initialized a auto loaded class

/**
 *  
 *  @function: typeWritter
 *
 * 
 * @purpose: to type write text on the screen
 *  
 */


const printMessage = (element, text, speed) => {
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


/**
 * 
 * @function: validation
 * 
 * @purpose: in order to validate the form before the submissions 
 *  
 */

const validation = (e) => {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const message = document.getElementById('message');

    const api = new Dial();


    const headers = {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    }

    let counter = 0;

    if (name.value.length < 3) {
        console.log('name is too short');
    } 
        counter++;
    if (email.value.length < 3) {
        console.log('email is too short');
    }
        counter++;
    if (message.value.length < 3) {
        console.log('message is too short');
    }
        counter++;

    if (counter === 0) {
        return false;
    }

    return api.get('/api/contact', headers);
}



// main section of the code. 
document.addEventListener("DOMContentLoaded",  (e) => {

    // initialize the type writer
    const textContainer = document.getElementById('idea-text');
    const msg = "What's your next idea?";
    printMessage(textContainer, msg , 200);


    // form validation

    const form = document.getElementById('contactForm');
    const submissions = document.getElementById('submissions');


    submissions.addEventListener('submit', (e) => {
        e.preventDefault();
        validation(e);
    });


    form.addEventListener('submit', (e) => {
        e.preventDefault();
        console.log('form submitted');

        return validation();
    });

});