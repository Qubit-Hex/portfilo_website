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


/**
 *  @function: cloudChefScreenshots
 * 
 *  @purpose: inorder to active the cloud chef screenshots 
 * 
 * 
 *  might add parms to the function in the future inorder for me not to repeat the code not sure yet though. 
 * 
 */

const loadScreenShots = (image1, image2, image3) => {
    // load the buttons and listeners for the cloud chef screenshots
    const modal = document.getElementById('modal');
    const screen1 = document.getElementById('screen1');
    const screen2 = document.getElementById('screen2');
    const screen3 = document.getElementById('screen3');
    const screenShotContainer = document.getElementById('screenshot');

    // activate the screenshots for each of the applications 
    screen1.addEventListener('click', (e) => {
        modal.style.display = 'block';
        screenShotContainer.src = image1;
    });

    screen2.addEventListener('click', () => {
        modal.style.display = 'block';
        screenShotContainer.src = image2;
    }); 

    screen3.addEventListener('click', () => {
        modal.style.display = 'block';
        screenShotContainer.src = image3;
    });


}

// main section of the code. 
document.addEventListener("DOMContentLoaded",  (e) => {

    // initialize the type writer
    const textContainer = document.getElementById('idea-text');

    if (textContainer) {
        const msg = "What's your next idea?";
        printMessage(textContainer, msg , 200);
    }

    // form validation
    
    const form = document.getElementById('contactForm');
    const submissions = document.getElementById('submissions');

    if (form && submissions) {

        submissions.addEventListener('submit', (e) => {
            e.preventDefault();
            validation(e);
        });


        form.addEventListener('submit', (e) => {
            e.preventDefault();
            console.log('form submitted');

            return validation();
        });

    }


        // the modal trigger 

        const modal = document.getElementById('modal');
        const modalClose = document.getElementById('modal-close');

        // check if the id is active and if the modal is active then execute the 
        // required actions 
        if (modal && modalClose) {

            modalClose.addEventListener('click', () => {
                modal.style.display = 'none';
            }); 
            // check which page we are accessing 
            const _cloudchef_ = document.getElementById('cloudchefLanding');
            if(_cloudchef_) {
                // activate the screen shots triggers... 
                loadScreenShots(
                    '/assets/images/recipes_screenshot.png',
                    '/assets/images/dashboard_screenshot.png',
                    '/assets/images/employee_screenshot.png'
                );
            }
        }

});