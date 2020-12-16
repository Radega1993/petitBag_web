const axios = require('axios');


const login = async (email, password) => {

  const resp = await axios.get(`https://api-petitbag.paraanime.com/login`);

  return resp.data.main.temp


}

module.exports = {
  login
}
