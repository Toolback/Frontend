import React, { Component } from 'react';
import axios from 'axios';

export default axios.create({
    baseURL: 'https://api.unsplash.com', 
    headers: {
        Authorization: 'Client-ID gR-BoMHKTgRXNedtfAgBUFP0ZfP2YrtK2X3-NJKOeH4'
    }})