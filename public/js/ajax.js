window.addEventListener('DOMContentLoaded',function(){
const btn = document.getElementById('update');

btn.addEventListener('mouseover', function(){
  console.log("mouseover OK")
})
btn.addEventListener('mouseout', function(){
  console.log("mouseout OK")
})
// debugger
btn.addEventListener('click', confirmation,false);

function confirmation(){
  const v = confirm('Topへ移動しますか？');
  if(v === true){
    window.location.href = '/junapp/public/';
  }
}

});

