import axios from "axios";


export default {
  created() {
    axios
      .get("https://suppliers.depembroke.fr/api/suppliers")
      .then((response) => {
        this.suppliers = response.data.data;
        console.log(this.suppliers);
        this.loading = false
      })
      .catch((error) => {
        this.error = "Un problème est survenu, changer de site internet nous on est nuls";
      })
  }
};