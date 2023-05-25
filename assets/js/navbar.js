function chooseOption(id) {
    const url = 'http://localhost/trandaiphat_profile_website/';
    if (id == 'homepage') {
        window.location.href = url;
    } else {
        window.location.href = url +id; 
    }

}