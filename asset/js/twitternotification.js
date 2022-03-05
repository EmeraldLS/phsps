(async () => {
    // create and show the notification
    const showNotification = () => {
        // create a new notification
        const notification = new Notification('PHSPS', {
            body: 'Follow us on twitter',
            icon: 'asset/images/phsps.jpg'
        });

        // close the notification after 10 seconds
        setTimeout(() => {
            notification.close();
        }, 30 * 1000);

        // navigate to a URL when clicked
        notification.addEventListener('click', () => {

            window.open('https://twitter.com/AppsPhsps', '_blank');
        });
    }

    // show an error message
    // const showError = () => {
    //     const error = document.querySelector('.error');
    //     error.style.display = 'block';
    //     error.textContent = 'You blocked the notifications';
    // }

    // check notification permission
    let granted = false;

    if (Notification.permission === 'granted') {
        granted = true;
    } else if (Notification.permission !== 'denied') {
        let permission = await Notification.requestPermission();
        granted = permission === 'granted' ? true : false;
    }

    // show notification or error
    granted ? showNotification() : showError();

})();