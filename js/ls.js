   
        const input_qty = document.querySelector(".ax");
        const plus = document.querySelector(".ab");
        const minus = document.querySelector(".ac");
        
        console.log(plus)
        plus.addEventListener('click', ()=>{
            console.log("plus")
            input_qty.value = parseInt(input_qty.value) + 1;
        })

        minus.addEventListener('click', ()=>{
            if (input_qty.value > 0)
                input_qty.value = parseInt(input_qty.value) - 1;
        })
    

   
        $("#header").load("header.html")
        $("#footer").load("footer.html");
    

   
        const fasr = document.querySelector('.fasr')
        const p1 = document.querySelector('.p1')
        let i1 = 0;

        fasr.addEventListener('click', ()=>{
            if (i1 == 0)
            {
                p1.style.display = "none"
                i1 = 1;
            }
            else
            {
                p1.style.display = "block"
                i1 = 0;
            }
        })

       
    
   