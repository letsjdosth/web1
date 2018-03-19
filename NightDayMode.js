// in if(),  document.querySelector('body').dataset.mode==='day' --->
// in if(),  document.querySelector('#night_day').value==='night'
//      if we put input tag to id="night_day"--->

var Link={
  color:function(color){
    // var all_link=document.querySelectorAll('a')
    // var i=0;
    // while(i<all_link.length){
    //   all_link[i].style.color=color;
    //   i=i+1;
    // }
    $('a').css('color', color);
  }
}
var Body={
  textColor:function(color){
    // var target1=document.querySelector('body');
    // target1.style.color=color;
    $('body').css('color',color);
  },
  backgroundColor:function(color){
  // var target1=document.querySelector('body');
  // target1.style.backgroundColor=color;
    $('body').css('backgroundColor',color);
  }
}
function NDhandler(self){
  if(self.value==='night'){
    Body.backgroundColor('black');
    Body.textColor('white');
    Link.color('white');
    document.querySelector('body').dataset.mode='night';
    self.value='day';
  } else {
    Body.backgroundColor('white');
    Body.textColor('black');
    Link.color('black');
    document.querySelector('body').dataset.mode='day';
    self.value='night';
  }
}
