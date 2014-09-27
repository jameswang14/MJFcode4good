/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var counter=1;
 $(document).ready(function(){
for(i=2; i< 6; i++){
    
    $('#page'+i).hide();
}


$('#left').on( "click", function() {
    
    if(counter==1){
        
    }
    else if(counter==7){
        counter--;
        $('#page'+counter).hide();
        counter--;
        $('#page'+counter).show();
    }
    else{
        $('#page'+counter).hide();
        counter--;
        $('#page'+counter).show();
    }
    
    });
    
    $('#right').on( "click", function() {
    if(counter==6){
        $('#page'+(counter+1)).show();
    }
    else{
        $('#page'+counter).hide();
        counter++;
        $('#page'+counter).show();
        
    }
    
    });
 });
