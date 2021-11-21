import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

const Recipe = () => {
    const [singleRecipe, setSingleRecipe] = useState(null);
    const [loading, setLoading] = useState(true);

    const { id } = useParams();

    const getData = async () => {
        const res = await axios.get(`/api/recipes/${id}`);

        console.log(res.data);
        setSingleRecipe(res.data);
        setLoading(false);
    };

    useEffect(() => {
        getData();
    }, []);

    console.log(singleRecipe);

    return (
        <div className="recipe-main-container">

            <div class="recipe-icons-left-panel">
                <img class="recipe-icon" src="/img/Icons/fb.png" />
                <img class="recipe-icon" src="/img/Icons/twitter.png" />
                <img class="recipe-icon" src="/img/Icons/instagram.png" />

            </div>

            <div className="recipe-leftSite">
                {loading ? (
                    <div>...loading...</div>
                ) : (
                    <>
                        <h4 className="recipes-all-recipes">
                            <strong>{singleRecipe.name}</strong>
                        </h4>
                        <div className="recipe-leftSite-container">
                            <p className="recipe-left-description">
                                {singleRecipe.description}
                            </p>
                            <img
                                className="recipe-img-react"
                                src={singleRecipe.images[1].path}
                            />

                            <p>Calories: {singleRecipe.calories} kcal</p>
                            <p>Cooktime: {singleRecipe.cooktime} min</p>
                            <p>Preptime: {singleRecipe.preptime} min</p>
                            <p>Servings: {singleRecipe.servings} </p>
                            <p>Carbs: {singleRecipe.carbs} g</p>
                            <p>Protein: {singleRecipe.protein} g</p>
                            <p>Fat: {singleRecipe.fat} g</p>
                            <p>Sugar: {singleRecipe.sugar} g</p>
                            <p>Fiber: {singleRecipe.fiber} g</p>

                            <img
                                className="recipe-img-react"
                                src={singleRecipe.images[0].path}
                            />

                            <div className="recipe-left-box-title">Ingredients:</div>
                            <ul>
                                {singleRecipe.ingredients.map ((ingredient, index) => (
                                    <li className="recipe-ingredients"
                                    key={index}>{ingredient.name}</li>
                                ))}
                            </ul>

                            <div className="recipe-left-box-title">Instructions:</div>
                            <ol>
                                {singleRecipe.instructions.map ((instructions, index) => (
                                    <li className="recipe-instructions"
                                    key={index}>{instructions.text}</li>
                                ))}
                            </ol>

                        </div>
                    </>
                )}
            </div>

            <div className="recipe-rightSite">
                <h4 className="recipes-all-recipes">Fresh and zesty </h4>
                <div className="recipe-rightSite-container">
                    <h3 className="recipe-rightSite-search">SEARCH RECIPES</h3>
                    <p className="recipe-rightSite-menu">
                        <strong>
                            BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                            GLUTEN FREE
                        </strong>
                    </p>
                    <a>
                        <p>ALL RECIPES </p>
                    </a>
                    <p>
                        <strong>━━━━━━⤞●⤝━━━━━━</strong>
                    </p>

                    <img
                        className="recipe-rightSite-img"
                        src="/img/Capture.PNG"
                        alt="us"
                    ></img>

                    <p>
                        <strong>Hello, we're Gloria and Katarina.</strong>
                    </p>
                    <p>
                        We love to eat, travel, cook, and eat some more! We
                        created this recipe website from scratch during the
                        coding Bootcamp Praha 2021. As an example we used
                        www.loveandlemons.com and all our recipes are from
                        www.bbcgoodfood.com.
                    </p>
                    <p>
                        <strong>━━━━━━⤞●⤝━━━━━━</strong>
                    </p>
                    <div>
                        <img class="recipe-icon-right" src="/img/Icons/fb.png" />
                        <img class="recipe-icon-right" src="/img/Icons/twitter.png" />
                        <img class="recipe-icon-right" src="/img/Icons/instagram.png" />
                     </div>
                </div>
            </div>
        </div>
    );
};

export default Recipe;
