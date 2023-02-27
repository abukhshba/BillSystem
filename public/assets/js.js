const parentDiv  = document.querySelector('#parentDiv');
const div = document.querySelector('#test');
const add_  = document.querySelector('#add');
const saveButton  = document.querySelector('#saveButton');
const billDetails = document.querySelector('#billDetails');

var obj_details= [
    //example {product_id:1 , "quantity":10},
]
//duplicated div
add_.addEventListener('click' , ()=>{

    const x = div.cloneNode(true);
    parentDiv.appendChild(x);

});
// saveButton.addEventListener('click' , ()=>{
saveButton.addEventListener('click' , ()=>{
    let productDivs =  document.getElementsByName('test');
    data={};
    for (let i=0 ; i<productDivs.length; i++ ){
        data['product_id']= productDivs[i].childNodes[3].childNodes[1].value;
        data['quantity'] = productDivs[i].childNodes[7].value;
        obj_details.push(data);
        data={};
    }
    billDetails.value = JSON.stringify(obj_details);
}); 
