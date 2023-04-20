import ReceptView from "./ReceptView.js";

class ReceptekView{
    constructor(tomb, szuloElem){
        szuloElem.append(`
            <table class="table">
                <thead>
                    <tr>
                        <th>Név</th>
                        <th>Kategória</th>
                        <th>Kép</th>
                        <th>Leírás</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        `);
        const ujSzulo = $("tbody")
        tomb.forEach(recept => {
            new ReceptView(recept, ujSzulo);
        });
    }
}

export default ReceptekView;