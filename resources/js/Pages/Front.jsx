export default function Front(){
    function getCreate(event){
        event.preventDefault();
        get(route(dish-create));
    }
    return(
        <>
        <h1>front page</h1>
        <button onClick={getCreate}>button</button>
        </>
    )
}