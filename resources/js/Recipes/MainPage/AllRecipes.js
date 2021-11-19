import React from 'react';
import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { get } from '../../util/request';

const AllRecipes = () => {
    const [recipes, setRecipes] = useState([]);

    const loadRecipesData = async () => {
        // const url = '/api/recipes' + encodeURIComponent(searchTerm);
        const url = 'api/recipes';

        // use our predefined get function
        // to make a GET http request
        // get an axios response object
        const response = await get(url);

        console.log(response);
        setRecipes(response.data);
    };

    useEffect(() => {
        loadRecipesData();
    }, []);

    return (
        <div className="recipes-leftSite">
            <div>
                <h4 className="recipe-all-recipes">All recipes</h4>

                <div className="recipe-wrap-box">
                    {recipes.map((recipe) => (
                        <Link to={`/recipes/${recipe.id}`}>
                            <div>
                                <img
                                    className="recipe-img-react"
                                    src={recipe.images[1].path}
                                />

                                <div className="recipe-name-react">
                                    {recipe.name}
                                </div>
                            </div>
                        </Link>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default AllRecipes;
