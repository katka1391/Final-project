import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

const Recipe = () => {

const [singleRecipe, setSingleRecipe] = useState(null);

    const { id } = useParams();


    const getData = async () => {

        const res = await axios.get(`/api/recipes/${id}`)

        console.log(res.data)
        setSingleRecipe(res.data)

    }


    useEffect(() => {
        getData()
    }, [])



    return ( 
        <div>
            <h1>Hello from Single Rescipe page {id}</h1>
            <p></p>
        </div>



     );
}
 
export default Recipe;