
document.addEventListener('DOMContentLoaded', function () {
    if (window.dfMessenger) {
      window.dfMessenger = new window.dfMessenger({
        accessToken: 'AIzaSyAbHaY1SFQ1hMkD3faymToA0ZCE-kAetDs',
        chatTitle: 'Your Chat Title',
      });
      window.dfMessenger.render();
    } else {
      console.error('Dialogflow Messenger not available.');
    }
  });
  