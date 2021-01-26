import axios from 'axios';

export default class StationsApi {
    static async all(): Promise<any[]> {
        const response = await axios.get('/stations');
        return response.data;
    }
}
