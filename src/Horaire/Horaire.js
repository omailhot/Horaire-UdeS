import React from 'react'
import "./Horaire.css"

const lienUdes = "https://www.usherbrooke.ca/admission/fiches-cours/";

const sessions = [
    ["S2","T2","S3","T3","S4","T4","S5","S6"],
    ["A21","H22","E22","A22","H23","E23","A23","H24"]
];

const cours = [
    ["IFT209","IFT232","IFT339","MAT115","IFT203"],
    [],
    ["IFT287","IFT320","IFT436","ADM124","MAR221"],
    [],
    ["IFT585","IFT606","IGE401","IGL601","STT418"],
    [],
    ["IGL301","IGE487","IGE511","IGE592","IFT615"],
    ["IGE502","GRH121","IFT604","IGE692","IFT702"]
];

const transpose = m => m[0].map((x,i) => m.map(x => x[i]))

const Horaire = () => {
    return (
        <table id="cours">
            <thead>
                <tr id="sessions">
                    {sessions[0].map((session, index) => 
                        <th key={index}>{session}</th>
                    )}
                </tr>

                <tr id="saison">
                    {sessions[1].map((saison, index) => 
                        <th key={index}>{saison}</th>
                    )}
                </tr>
            </thead>

            <tbody>
                {transpose(cours).map((c, index) =>
                    <tr key={index}>
                        {c.map((choix, index) => 
                            <td className={`${c[index] === undefined ? "empty" : ""}`} key={index}>
                                <a href={lienUdes + choix}>{choix}</a>
                            </td>
                        )}
                    </tr>
                )}
            </tbody>
        </table>
    )
};

export default Horaire;