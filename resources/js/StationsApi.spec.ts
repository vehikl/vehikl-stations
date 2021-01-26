import StationsApi from './StationsApi';
import axios from 'axios';
import getStationsFixture from './fixtures/get-stations-fixture.json';

describe('StationsApi', () => {
    it('gets the list of stations through the all() method', async () => {
        axios.get = jest.fn().mockResolvedValue(getStationsFixture);
        const result = await StationsApi.all();

        expect(axios.get).toHaveBeenCalledWith('/stations');
        expect(result).toEqual(getStationsFixture.data);
    });
});
