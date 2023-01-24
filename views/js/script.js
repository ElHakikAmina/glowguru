function addForm()
{
    document.getElementById("addForms").innerHTML+='<div class=" text-white "><h3 class="text-green text-center my-5">New Form</h3><div class="form-outline mb-4 mt-2"><input type="text" name="name[]" id="form2Example1" placeholder="Products name ..." class="form-control" /><label class="form-label text-green" for="form2Example1"> Products name</label></div><div class="form-outline mb-4"><input type="text" name="buying_price[]" id="form2Example2" placeholder="Buying price ..." class="form-control" /><label class="form-label text-green" for="form2Example2">Buying price</label></div><div class="form-outline mb-4"><input type="text" name="final_price[]" id="form2Example2" placeholder="Final price ..." class="form-control" /><label class="form-label text-green" for="form2Example2">Final price</label></div><div class="form-outline mb-4"><input type="text" name="quantity[]" id="form2Example2" placeholder="Quantity ..." class="form-control" /><label class="form-label text-green" for="form2Example2">Quantity</label></div><div class="form-outline mb-4"><textarea name="description[]" placeholder="Description ..." class="form-control"></textarea><label class="form-label text-green" for="form2Example2">Description</label></div><div class="form-outline mb-4"><input type="file" name="image[]" id="form2Example2" class="form-control" /><label class="form-label text-green" for="form2Example2">Photo</label></div></div>'
}



const search =()=>{
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementById("product-list");
    const product = document.querySelectorAll(".product");
    const pname = document.getElementsByTagName("h6");
    for(var i=0; i<pname.length;i++)
    {
        let match = product[i].getElementsByTagName("h6")[0];
        if(match){
            let textvalue=match.textContent;
            if(textvalue.toUpperCase().indexOf(searchbox)>-1)
            {
                product[i].style.display="";
            }else{
                product[i].style.display = "none";
            }
        }
    }
}







































