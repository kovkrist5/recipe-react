export default function Create(){

    function handleSubmit(event){
        event.preventDefault();
        post(route("/dish-create"),{
            onSuccess:()=> window.location.href=route("dashboard")
        })

    }
    return(
        <>
         <h1>create dish</h1>
         <form onSubmit={handleSubmit}>
            <fieldset>
                <label for="name">name:</label>
                <textarea name="name" id="name"></textarea>
                
            </fieldset>
            <fieldset>
                <textarea name="category" id="categoryId"></textarea>
                <label for="category"></label>
            </fieldset>
            <fieldset>
                <textarea name="desc" id="desc"></textarea>
                <label for="desc"></label>
            </fieldset>
            <fieldset>
                <input type="number" name="prep" id="prep" />
                <label for="prep"></label>
            </fieldset>
            <fieldset>
                <input type="number" name="cooktime" id="cooktime" />
                <label for="cooktime"></label>
            </fieldset>
         <button ></button>
         </form>
         
        </>
        
        
    )
}
