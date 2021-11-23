import React from 'react';
import { Link } from 'react-router-dom';

const AllRecipes = ({ recipes }) => {
    return (
        <div className="recipes-leftSite">
            <div>
                <h4 className="recipes-all-recipes">All recipes</h4>

                <div>
                
                </div>

                <div className="recipes-wrap-box">
                    {recipes.map((recipe, index) => (
                        <Link key={index} to={`/recipes/${recipe.id}`}>
                            <div>
                                {
                                    recipe.images && recipe.images.length > 0 ? (
                                        <img
                                            className="recipes-img-react"
                                            src={recipe.images[1].path}
                                        />
                                    ) : (
                                        <img className="recipes-img-react" src="/img/empty-plate.png"  />
                                    )
                                }

                                <div className="recipes-name-react">
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
