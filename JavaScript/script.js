$(document).ready(function(){
    /* Задание 1 */
    let main_block = document.getElementById('main');
    for(i=0; i<3; i++){
        let div_block = $('<div></div>');
        let p_block = $('<p>popup</p>');
        $(div_block).click(function(event){
            color = "rgb("+Math.round(255.0*Math.random())+","+Math.round(255.0*Math.random())+","+Math.round(255.0*Math.random())+")";
            console.log(color);
            $(this).css('background-color', color);
        })
        div_block.append(p_block[0]);
        main_block.append(div_block[0]);
    }

    /* Задание 2 */
    function setGetParams(newGetParams) {
        let newString = '';
        for(key in newGetParams){
            newString += (newString != '' ? '&' : '') + key + '=' + newGetParams[key]
        }
        return window.location.href + '?' + newString
    }

    let obj = {
        first: "Test",
        second: "Denero",
      };
      
    setGetParams(obj);
})
