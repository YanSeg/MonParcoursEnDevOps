package Ennemis.Sorciers;

import Images.ASCII_Representations;
import Personnages.Personnage;
import PlateuDeJeu.EquipementFactory;

public class LicheMaudite extends Sorcier {


    public LicheMaudite() {
        super("Ennemis", "La Liche Maudite", 7, 10, EquipementFactory.createEquipDef(), EquipementFactory.createEquipOf());
        ASCII_Representations image = new ASCII_Representations();
        setImage(image.creepymaneyes());
    }


}

