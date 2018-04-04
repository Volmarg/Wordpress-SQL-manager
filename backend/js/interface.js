function editRow(element){  // set of functions responsile for editing row elements
  highlightEditable(element);
}

function highlightEditable(element){ //Highlight elements and make themm editable
  //get number of current row
  var id=element.id;
  var rowNum=id.match(/([0-9]+)/g);
  var type=id.match(/([0-9]+)-(.*)/);

  //grab full row
  var row=document.querySelector('[data-id^="tr-'+rowNum+'-'+type[2]+'"]');

  //w check if that row is being edited atm or not, if yes then revert to non edit
  if(jQuery(row).attr('data-editable')=='true'){
    jQuery(row).css('color','black');
    jQuery(row).find('td').find('#valueHolder').each(function(){
        jQuery(this).attr('contentEditable','false').removeClass('editableContent');

        //show html() value and hide select
        if(jQuery(this).parent().find('#hiddenSelect')){
          jQuery(this).parent().find("#hiddenSelect").css('display','none');
          jQuery(this).parent().find("#hiddenSelect").prev().css('display','block');
        }
      })
    jQuery(row).attr('data-editable','false');

  }else{
    jQuery(row).css('color','red');
    jQuery(row).find('td').find('#valueHolder').each(function(){
        jQuery(this).attr('contentEditable','true').addClass('editableContent');

        //hide html() value and show select
        if(jQuery(this).parent().find('#hiddenSelect')){
          jQuery(this).parent().find("#hiddenSelect").css('display','block');
          jQuery(this).parent().find("#hiddenSelect").prev().css('display','none');
        }
      })

    jQuery(row).attr('data-editable','true');
  }

}

function applyNewValue(element){ //used for selects shown upon edit. It sets up the html value of element that is being hidden and returns on edition cancel
  var value=jQuery(element).find('option:selected').val();
  jQuery(element).parent().find("#hiddenSelect").prev().html(value);
}

/*------------------------- SAVE ------------------------------*/
.
.
.
.

function show1stTab(){
  jQuery('.hiddenTab').first().removeClass('hiddenTab');
}

function removeSelect(element){
  var id=element.id;
  var value=jQuery(element).prev();

  var sql=buildSelectQuery(id,element);
  ajaxRemoveListElement(sql);
  location.reload();
}

function buildSelectQuery(id,element){
  var removed=jQuery(element).data('remove'); //element currently removed
  var tableDBName=jQuery(element).data('table'); //section name office/person

  var table=jQuery('[data-id="'+id+'"][data-table="'+tableDBName+'"]');   //tab handler

  var columnName=jQuery(table).data('column');
  var elementsNum=table.find('[data-type^="name"]').length-1;

  var query='';
  var x=0;

  // build query based on element in table
  table.find('[data-type^="name"]').each(function(index){
    //make sure you skip the removed element
    if(jQuery(this).html()!=removed){
      //two builders in case first/last element
      if(x<elementsNum){
        query+=jQuery(this).html()+'|';
      }else{
        query+=jQuery(this).html();
      }
    }
    x++;
  });
  // now just in case check if there is | on end and remove it
  var lastChar=query.substr(query.length-1);
  if(lastChar=='|'){
    query=query.slice(0,-1);
  }
  //create and return sql
  var sql="UPDATE `"+tableDBName+"` SET `"+columnName+"`='"+query+"'";
  return sql;
}
/* execute */
show1stTab();
