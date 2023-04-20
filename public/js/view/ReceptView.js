class ReceptView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <tr id="recept${elem.id}">
                <td>${elem.nev}</td>
                <td>${elem.kat_id}</td>
                <td>${elem.kep_eleresi_ut}</td>
                <td>${elem.leiras}</td>
            </tr>
        `);
    }
}

export default ReceptView;