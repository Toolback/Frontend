import axios from 'axios';

export default axios.create({
    baseURL: 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=25',
    headers : {
        Authorization : Bearer
    }
});

GET https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=25&q=surfing&key=[YOUR_API_KEY] HTTP/1.1
