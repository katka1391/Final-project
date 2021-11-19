import React from 'react';
import { useEffect, useState } from 'react';
import { get } from '../../util/request';

const Filter = () => {
    const [searchTerm, setSearchTerm] = useState('');
    const [categories, setCategories] = useState([]);
    const [ingredients, setIngredients] = useState([]);
    const [loading, setLoading] = useState(true);

    const loadCategoriesData = async () => {
        const url = 'api/categories';

        const response = await get(url);

        console.log(response.data);
        setCategories(response.data);
        setLoading(false);
    };

    useEffect(() => {
        loadCategoriesData();
    }, []);

    const loadIngredientsData = async () => {
        const url = 'api/ingredients';

        const response = await get(url);

        console.log(response.data);
        setIngredients(response.data);
        setLoading(false);
    };

    useEffect(() => {
        loadIngredientsData();
    }, []);

    return ( 
        <form className="recipes-rightSite">
                <div>
                    <label htmlFor="search-recipes">
                        Search Recipe Titles:
                    </label>
                    <br />
                    <input
                        type="text"
                        id="search-recipes"
                        onChange={(event) => setSearchTerm(event.target.value)}
                    />
                </div>

                <h4>Filter Recipes:</h4>
                <p>
                    Check multiple boxes below to narrow recipe search results:
                </p>
                <br />
                <br />

                <h5>BY DIARY REQUIREMENT</h5>

                {loading ? (
                    <div>!!!!!!!!I am going to proper loading spiner here</div>
                ) : (
                    categories['dietary requirement'].map((dietaryType) => (
                        <>
                            <input
                                type="checkbox"
                                id={`filter-${dietaryType}`}
                            />
                            <label htmlFor={`filter-${dietaryType}`}>
                                {dietaryType}
                            </label>
                            <br />
                        </>
                    ))
                )}
                <br />

                <h5>BY MEAL TYPE</h5>

                {loading ? (
                    <div>!!!!!!!!I am going to proper loading spiner here</div>
                ) : (
                    categories.meal.map((mealType) => (
                        <>
                            <input type="checkbox" id={`filter-${mealType}`} />
                            <label htmlFor={`filter-${mealType}`}>
                                {mealType}
                            </label>
                            <br />
                        </>
                    ))
                )}
                <br />

                <h5>BY CUISINE</h5>

                {loading ? (
                    <div>!!!!!!!!I am going to proper loading spiner here</div>
                ) : (
                    categories.cuisine.map((cuisineType) => (
                        <>
                            <input
                                type="checkbox"
                                id={`filter-${cuisineType}`}
                            />
                            <label htmlFor={`filter-${cuisineType}`}>
                                {cuisineType}
                            </label>
                            <br />
                        </>
                    ))
                )}
                <br />

                <h5>BY INGREDIENTS</h5>

                {loading ? (
                    <div>!!!!!!!!I am going to proper loading spiner here</div>
                ) : (
                    ingredients.map((ingredient) => (
                        <>
                            <input
                                type="checkbox"
                                id={`filter-${ingredient.name}`}
                            />
                            <label htmlFor={`filter-${ingredient.name}`}>
                                {ingredient.name}
                            </label>
                            <br />
                        </>
                    ))
                )}
            </form>
     );
}
 
export default Filter;