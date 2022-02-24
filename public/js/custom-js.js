var Add_button = document.getElementById('button_add');
function openPopup(){
    let popup_mask = document.getElementById('popup_mask');
    popup_mask.classList.remove("hidden", "animate__fadeOut");
    popup_mask.classList.add("animate__fadeIn", "animate__faster");
}

Add_button.addEventListener('click', function(){
    openPopup();
});

window.addEventListener('openPopup', function(){
    openPopup();
})

window.addEventListener('closePopup', function(){
    Livewire.emit('resetPopup');

    let popup_mask = document.getElementById('popup_mask');
    popup_mask.classList.remove("animate__fadeIn");
    popup_mask.classList.add("animate__fadeOut");

    // wait animation end and add "hidden" into the mask
    popup_mask.addEventListener('animationend', () => {
        popup_mask.classList.add("hidden");
    }, {once: true});
})

window.addEventListener('changeShowStatus', event => {
    // console.log('Event: changeShowStatus | Livewire object id: ' + event.detail.wire_id);
    let total_height = 0;
    let wire_id = event.detail.wire_id;
    let item_body = document.querySelector("[wire\\:id='"+wire_id+"'] \.ToDo-item-body")

    if(item_body.offsetHeight == 0){
        let item_body_item = item_body.querySelectorAll("*");

        item_body_item.forEach(element => {
            total_height += element.clientHeight;
        });    
        item_body.style.maxHeight = total_height + "px";
    }else{
        item_body.style.maxHeight = "0px";
    }
})