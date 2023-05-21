
const thead = document.getElementById("thead");
const tbody = document.getElementById("tbody");

async function getJSON() {
    const response = await fetch("data.json");
    const json = await response.json();
    return json;
}




function fillTableHeaders(data){
    
    array = Object.keys(data[0])
    array.forEach(element => {
        thead.innerHTML += `<th>${element}</th>`
    });

}


function fillTableBody(data){
    ObjectLenght = Object.values(data[0]).length
    data.forEach(element => {
        
        
        tbody.innerHTML += "<tr>"
        for (let i = 0; i < ObjectLenght; i++) {

            td= document.createElement('td');
            td.textContent = (Object.values(element))[i];
            tbody.append(td)
            console.log((Object.values(element))[i])

        }
        tbody.innerHTML += "</tr>"
        
        
    });
}



getJSON().then(result => {
    
    fillTableHeaders(result)
    fillTableBody(result)
    
})




