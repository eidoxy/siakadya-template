const API_BASE_URL = process.env.API_BASE_URL || 'http://localhost:8000/';

const API_ENDPOINTS = {
  mahasiswaData: `${API_BASE_URL}data-mahasiswa.json`,
  addMahasiswa: `${API_BASE_URL}add-mahasiswa`,
  deleteMahasiswa: `${API_BASE_URL}delete-mahasiswa`,
  updateMahasiswa: `${API_BASE_URL}update-mahasiswa`
};

export default API_ENDPOINTS;
