class AdatModel{
    #tomb = [];
    
    constructor(token){
        this.token=token;
    }

    adatBe(vegpont, myCallBack) {
        console.log(vegpont);
        fetch(vegpont, 
        {
            method: 'GET',
            headers: 
            {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.token,
            }
        })
        .then((response) => response.json())
        .then((data) => 
        {
            this.#tomb = data;
            console.log(this.#tomb);
            myCallBack(this.#tomb);
        })
        .catch((error) => 
        {
            myCallBack(undefined)
        });
    }

    adatUj(vegpont, adat){
        console.log(adat);
        console.log(JSON.stringify(adat));
        fetch(vegpont,
        {
            method: "POST",
            body: JSON.stringify(adat),
            headers:
            {
                "content-type": "application/json",
                "X-CSRF-TOKEN": this.token,
            },
        })
        .then((response)=>response.json())
        .then((data)=>
        {
            console.log("Sikeres adatfelvitel" + data);
        })
        .catch((error)=>
        {
            console.error("Error", error);
        });
    }

    adatModosit(vegpont, adat, id){
        console.log(adat);
        console.log("módosít", vegpont);
        console.log(id);
        vegpont+="/" + id;
        fetch(vegpont,
        {
            method: "PUT",
            headers:
            {
                "content-type": "application/json",
                "X-CSRF-TOKEN": this.token,
            },
            body: JSON.stringify(adat),
        })
        .then((response)=>response.json())
        .then((data) => 
        {
            console.log("Sikeres módosítás" + data);
        })
        .catch((error) => 
        {
            console.error('Error:', error);
        });
    }
}

export default AdatModel;