function vote(){
    var voto = parseInt(document.getElementById('voto').value);
    if(voto == 15){ 
        if(document.getElementById('confirme').style.display == 'none'){
            document.getElementById('confirme').style.display ='block';
            document.getElementById('img').style.display ='none';
        if(document.getElementById('confirme').style.display == 'block'){
            document.getElementById('votar').style.display ='none';

        }
        }
        else{
            document.getElementById('confirme').style.display ='none';

        }

    }
    else if(voto == 55){
        if(document.getElementById('confirme1').style.display == 'none'){
            document.getElementById('confirme1').style.display ='block';
            document.getElementById('img').style.display ='none';
        if(document.getElementById('confirme1').style.display == 'block'){
            document.getElementById('votar').style.display ='none';

        }
        }
        else{
            document.getElementById('confirme1').style.display ='none';

        }

    }
    else if(voto == 25){
        if(document.getElementById('confirme2').style.display == 'none'){
            document.getElementById('confirme2').style.display ='block';
            document.getElementById('img').style.display ='none';
        if(document.getElementById('confirme2').style.display == 'block'){
            document.getElementById('votar').style.display ='none';

        }
        }
        else{
            document.getElementById('confirme2').style.display ='none';

        }

    }
    else{
        if(document.getElementById('confirme3').style.display == 'none'){
            document.getElementById('confirme3').style.display ='block';
            document.getElementById('img').style.display ='none';
        if(document.getElementById('confirme3').style.display == 'block'){
            document.getElementById('votar').style.display ='none';

        }
        }
        else{
            document.getElementById('confirme3').style.display ='none';

        }

    }
}


function n(){
    if(document.getElementById('confirme').style.display == 'block'){
        document.getElementById('confirme').style.display ='none';
    if(document.getElementById('confirme').style.display == 'none'){
        document.getElementById('votar').style.display ='block';
        document.getElementById('img').style.display ='block';


    }
    }
    else{
        document.getElementById('confirme').style.display ='none';

    }
    if(document.getElementById('confirme1').style.display == 'block'){
        document.getElementById('confirme1').style.display ='none';
    if(document.getElementById('confirme1').style.display == 'none'){
        document.getElementById('votar').style.display ='block';
        document.getElementById('img').style.display ='block';


    }
    }
    else{
        document.getElementById('confirme1').style.display ='none';

    }
    if(document.getElementById('confirme2').style.display == 'block'){
        document.getElementById('confirme2').style.display ='none';
    if(document.getElementById('confirme2').style.display == 'none'){
        document.getElementById('votar').style.display ='block';
        document.getElementById('img').style.display ='block';


    }
    }
    else{
        document.getElementById('confirme2').style.display ='none';

    }
    if(document.getElementById('confirme3').style.display == 'block'){
        document.getElementById('confirme3').style.display ='none';
    if(document.getElementById('confirme3').style.display == 'none'){
        document.getElementById('votar').style.display ='block';
        document.getElementById('img').style.display ='block';


    }
    }
    else{
        document.getElementById('confirme3').style.display ='none';

    }

}