import AdatModel from "../model/AdatModel.js";
import ReceptekView from "../view/ReceptekView.js";

class ReceptController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatmodel = new AdatModel(token);
        adatmodel.adatBe('/api/receptek', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloElem = $(".tartalom");
        tomb.forEach(recept => {
            new ReceptekView(tomb, szuloElem);
        });
    }
}

export default ReceptController;