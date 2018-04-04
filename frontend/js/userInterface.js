function additionalSummary(element){ //for showing additional setup price
  var formNum=$(element).data('num');
  var summaryHolder=$('#additionalSummary'+formNum);
  var additionalSummaryInput=$('#additionalSummaryInput'+formNum);
  var optionsBlock=$('#optionsWrapper'+formNum);
  var setupOptionsPrice=0;

  //get amount of reserved days via ajax
  var days=getDaysOfReservations(formNum);

  optionsBlock.find('input').each(function(){
    if($(this)[0].checked){
      var priceForItemDaily=$(this).data('value');
      var fullPriceForItem=priceForItemDaily*days;
      setupOptionsPrice+=fullPriceForItem;
      summaryHolder.addClass('alert alert-info');
    }
  })

  summaryHolder.html(setupOptionsPrice);
  additionalSummaryInput.val(setupOptionsPrice);
  totalPriceSummary(element);

}

function showCarImage(element){ //for showing cars images
  var id=element.id;
  var modelsBlock=$('#modelsWrapper-'+id);

  modelsBlock.find('option:selected').each(function(){
    var carName='image-'+$(this).data('value');
    $('#modelsWrapper-'+id+'>section').css('display','none');
    if($(this).is(':selected')){
      $('#'+carName).css('display','flex');
    }

  })

}

function callendarBlock(element){ //This is for blocking if user selects startDate AFTER endDate

  var startDate=$('[name^="od"]');
  var endDate=$('[name^="do"]');
  var returnable=false;

  var start = new Date(startDate.val());
  var end = new Date(endDate.val());
  if(start>end){
    startDate.val('');
    endDate.val('');
    //alert('Data startu jest pozniejsza od daty wyjazdu! Wybierz inny zakres!')
    returnable=false;
  }else{
    returnable=true;
  }
  return returnable;
}

function totalPriceSummary(element){
  var formNum=$(element).data('num');
  var normal=$('#normalPrice'+formNum).html();
  var additional=$('#additionalSummary'+formNum).html();

  var targetSection=$('#totalSumUp_'+formNum);
  var targetHolder=$('#totalSumUp'+formNum);

  var sum=parseInt(normal)+parseInt(additional);
  targetSection.html(sum);
  targetHolder.val(sum);
}
