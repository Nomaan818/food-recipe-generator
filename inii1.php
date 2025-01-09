<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Recipes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .recipe {
            background-color: white;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .recipe img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .recipe h2 {
            color: #4CAF50;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        p {
            white-space: pre-wrap; /* To preserve new lines */
        }
    </style>
</head>
<body>
    <h1>Find Recipes</h1>
    <input type="text" id="ingredient" placeholder="Enter an ingredient">
    <button onclick="fetchRecipes()">Get Recipes</button>

    <div id="recipes"></div>

    <script>
        function fetchRecipes() {
            const ingredient = document.getElementById('ingredient').value;

            // Simulate fetching recipes from ChatGPT
            const allRecipes = generateRecipes(ingredient);
            const randomRecipes = allRecipes.sort(() => 0.5 - Math.random()).slice(0, 5);
            displayRecipes(randomRecipes, ingredient);
        }

        function generateRecipes(ingredient) {
            return [
                { title: `${ingredient} Stir Fry`, ingredients: [`1 lb ${ingredient}`, '2 cups vegetables', '2 tbsp soy sauce'], instructions: 'Heat oil in a pan. Add the vegetables and stir-fry for 5 minutes. Add the ${ingredient} and soy sauce. Cook until done.' },
                { title: `${ingredient} Soup`, ingredients: [`2 cups ${ingredient}`, '1 cup broth', '1 cup water', 'Salt and pepper to taste'], instructions: 'Bring the broth and water to a boil. Add the ${ingredient} and cook for 10 minutes. Season with salt and pepper.' },
                { title: `${ingredient} Salad`, ingredients: [`1 cup ${ingredient}`, '1 cup mixed greens', '1 tbsp olive oil', '1 tbsp vinegar'], instructions: 'Mix all ingredients in a bowl. Drizzle with olive oil and vinegar. Toss to combine.' },
                { title: `${ingredient} Pasta`, ingredients: [`200g pasta`, `1 cup ${ingredient}`, '1 cup tomato sauce'], instructions: 'Cook pasta according to package instructions. In a pan, heat the tomato sauce and add the ${ingredient}. Mix with the cooked pasta.' },
                { title: `${ingredient} Sandwich`, ingredients: [`2 slices of bread`, `1/2 cup ${ingredient}`, 'Lettuce', 'Tomato', 'Mayonnaise'], instructions: 'Spread mayonnaise on the bread. Add the ${ingredient}, lettuce, and tomato. Serve.' },
                { title: `${ingredient} Curry`, ingredients: [`1 lb ${ingredient}`, '2 cups coconut milk', '1 onion', '1 tbsp curry powder'], instructions: 'Saute onion until golden. Add the ${ingredient} and curry powder. Stir in coconut milk and simmer until ${ingredient} is cooked.' },
                { title: `${ingredient} Smoothie`, ingredients: [`1 cup ${ingredient}`, '1 banana', '1 cup yogurt', '1 tbsp honey'], instructions: 'Blend all ingredients together until smooth. Serve chilled.' },
                { title: `${ingredient} Risotto`, ingredients: [`1 cup ${ingredient}`, '1 cup arborio rice', '4 cups broth', '1/2 cup parmesan cheese'], instructions: 'Cook the ${ingredient} in some oil. Add rice and broth gradually, stirring constantly until rice is cooked. Mix in parmesan cheese.' },
                { title: `${ingredient} Pizza`, ingredients: [`1 pizza base`, `1 cup ${ingredient}`, '1/2 cup tomato sauce', '1/2 cup cheese'], instructions: 'Spread tomato sauce over the pizza base. Add the ${ingredient} and cheese. Bake in the oven until cheese is melted and bubbly.' },
                { title: `${ingredient} Pie`, ingredients: [`1 pie crust`, `2 cups ${ingredient}`, '1/2 cup sugar', '1 tbsp lemon juice'], instructions: 'Mix ${ingredient} with sugar and lemon juice. Place in pie crust and bake until golden brown.' },
                { title: `${ingredient} Pancakes`, ingredients: [`1 cup flour`, `1/2 cup ${ingredient}`, '1 egg', '1 cup milk'], instructions: 'Mix all ingredients together to form a batter. Cook on a hot griddle until bubbles form, then flip and cook until golden.' },
                { title: `${ingredient} BBQ`, ingredients: [`1 lb ${ingredient}`, '1/2 cup BBQ sauce', 'Salt and pepper to taste'], instructions: 'Season the ${ingredient} with salt and pepper. Grill and baste with BBQ sauce until done.' },
                { title: `${ingredient} Kebabs`, ingredients: [`1 lb ${ingredient}`, '1 bell pepper', '1 onion', 'Skewers'], instructions: 'Thread the ${ingredient}, bell pepper, and onion onto skewers. Grill until the ${ingredient} is cooked through.' },
                { title: `${ingredient} Tacos`, ingredients: [`1 lb ${ingredient}`, 'Taco shells', 'Lettuce', 'Tomato', 'Cheese'], instructions: 'Cook the ${ingredient} in a pan. Fill taco shells with ${ingredient}, lettuce, tomato, and cheese. Serve with salsa.' },
                { title: `${ingredient} Quiche`, ingredients: [`1 pie crust`, `1 cup ${ingredient}`, '3 eggs', '1 cup cream', '1/2 cup cheese'], instructions: 'Mix eggs, cream, and cheese together. Add the ${ingredient} and pour into pie crust. Bake until set.' },
                { title: `${ingredient} Grilled Cheese`, ingredients: [`2 slices of bread`, `1/2 cup ${ingredient}`, 'Cheese', 'Butter'], instructions: 'Butter the bread and layer with cheese and ${ingredient}. Grill until golden brown and cheese is melted.' },
                { title: `${ingredient} Casserole`, ingredients: [`1 lb ${ingredient}`, '1 cup rice', '1 cup broth', '1/2 cup cheese'], instructions: 'Mix all ingredients together and place in a casserole dish. Bake until the ${ingredient} is cooked through.' },
                { title: `${ingredient} Fried Rice`, ingredients: [`2 cups cooked rice`, `1 cup ${ingredient}`, '1 egg', '2 tbsp soy sauce'], instructions: 'Cook the ${ingredient} in a pan. Add the rice, egg, and soy sauce. Stir-fry until well combined.' },
                { title: `${ingredient} Dumplings`, ingredients: [`1 lb ${ingredient}`, 'Dumpling wrappers', '1 cup cabbage', '2 tbsp soy sauce'], instructions: 'Mix ${ingredient} with cabbage and soy sauce. Wrap in dumpling wrappers and steam until cooked.' },
                { title: `${ingredient} Meatballs`, ingredients: [`1 lb ${ingredient}`, '1 egg', '1/2 cup breadcrumbs', 'Salt and pepper'], instructions: 'Mix all ingredients together. Form into balls and bake or fry until cooked through.' },
                { title: `${ingredient} Lasagna`, ingredients: [`1 lb ${ingredient}`, 'Lasagna noodles', '1 cup tomato sauce', '1/2 cup cheese'], instructions: 'Layer cooked noodles with ${ingredient}, tomato sauce, and cheese in a baking dish. Bake until cheese is melted and bubbly.' },
                { title: `${ingredient} Stir Fry Noodles`, ingredients: [`1 lb ${ingredient}`, '2 cups noodles', '1 cup vegetables', '2 tbsp soy sauce'], instructions: 'Cook the noodles according to package instructions. Stir-fry ${ingredient} with vegetables, then mix in noodles and soy sauce.' },
                { title: `${ingredient} Bruschetta`, ingredients: [`1 baguette`, `1 cup ${ingredient}`, '1/4 cup olive oil', '1 tbsp balsamic vinegar'], instructions: 'Toast slices of baguette. Top with ${ingredient}, olive oil, and balsamic vinegar.' },
                { title: `${ingredient} Enchiladas`, ingredients: [`1 lb ${ingredient}`, 'Tortillas', '1 cup enchilada sauce', '1/2 cup cheese'], instructions: 'Fill tortillas with ${ingredient}, roll up, and place in a baking dish. Cover with enchilada sauce and cheese. Bake until cheese is melted.' },
                { title: `${ingredient} Frittata`, ingredients: [`6 eggs`, `1 cup ${ingredient}`, '1/2 cup cheese', '1/4 cup milk'], instructions: 'Mix eggs, ${ingredient}, cheese, and milk. Cook in a pan over medium heat until eggs are set.' },
                { title: `${ingredient} Chowder`, ingredients: [`1 lb ${ingredient}`, '2 cups potatoes', '1 cup cream', '1 onion'], instructions: 'Cook the onion and potatoes in a pot. Add ${ingredient} and cream, simmer until everything is cooked through.' },
                { title: `${ingredient} Stuffed Peppers`, ingredients: [`4 bell peppers`, `1 cup ${ingredient}`, '1/2 cup rice', '1/2 cup cheese'], instructions: 'Mix ${ingredient} with rice and cheese. Stuff into bell peppers and bake until peppers are tender.' },
                { title: `${ingredient} Empanadas`, ingredients: [`2 cups ${ingredient}`, '1 cup cheese', 'Empanada dough'], instructions: 'Fill empanada dough with ${ingredient} and cheese. Fold over and seal. Bake until golden brown.' },
                { title: `${ingredient} Biryani`, ingredients: [`1 lb ${ingredient}`, '2 cups basmati rice', '1 onion', '2 tbsp biryani spice mix'], instructions: 'Cook the onion until golden, then add ${ingredient} and biryani spice mix. Stir in cooked rice and mix well.' },
                { title: `${ingredient} Burritos`, ingredients: [`1 lb ${ingredient}`, 'Tortillas', '1/2 cup rice', 'Beans', 'Cheese'], instructions: 'Fill tortillas with ${ingredient}, rice, beans, and cheese. Roll up and serve.' },
                { title: `${ingredient} Quesadillas`, ingredients: [`2 tortillas`, `1 cup ${ingredient}`, '1/2 cup cheese'], instructions: 'Place ${ingredient} and cheese between two tortillas. Cook on a griddle until cheese is melted and tortillas are crispy.' },
                { title: `${ingredient} Sushi`, ingredients: [`1 cup sushi rice`, `1 cup ${ingredient}`, 'Nori sheets', 'Soy sauce'], instructions: 'Spread sushi rice on nori sheets. Add ${ingredient} and roll up. Serve with soy sauce.' },
                { title: `${ingredient} Ramen`, ingredients: [`1 package ramen noodles`, `1 cup ${ingredient}`, '1 egg', '2 cups broth'], instructions: 'Cook ramen noodles according to package instructions. Add ${ingredient} and broth, and top with a boiled egg.' },
                { title: `${ingredient} Spring Rolls`, ingredients: [`1 cup ${ingredient}`, 'Spring roll wrappers', '1/2 cup vegetables'], instructions: 'Fill spring roll wrappers with ${ingredient} and vegetables. Roll up and fry until crispy.' },
                { title: `${ingredient} Samosas`, ingredients: [`1 cup ${ingredient}`, 'Samosa wrappers', '1/2 cup potatoes', '1/2 cup peas'], instructions: 'Mix ${ingredient} with potatoes and peas. Fill samosa wrappers and fry until golden brown.' },
                { title: `${ingredient} Dim Sum`, ingredients: [`1 cup ${ingredient}`, 'Dim sum wrappers', '1/2 cup vegetables'], instructions: 'Fill dim sum wrappers with ${ingredient} and vegetables. Steam until cooked through.' },
                { title: `${ingredient} Paella`, ingredients: [`1 lb ${ingredient}`, '2 cups rice', '1 cup broth', '1/2 cup peas'], instructions: 'Cook ${ingredient} with rice, broth, and peas in a large pan until rice is tender.' },
                { title: `${ingredient} Tofu Stir Fry`, ingredients: [`1 lb tofu`, `1 cup ${ingredient}`, '2 cups vegetables', '2 tbsp soy sauce'], instructions: 'Stir-fry tofu with ${ingredient} and vegetables. Add soy sauce and cook until done.' },
                { title: `${ingredient} Schnitzel`, ingredients: [`1 lb ${ingredient}`, '1 cup breadcrumbs', '1 egg', '1/2 cup flour'], instructions: 'Coat ${ingredient} in flour, then egg, then breadcrumbs. Fry until golden brown.' },
                { title: `${ingredient} Goulash`, ingredients: [`1 lb ${ingredient}`, '2 cups potatoes', '1 onion', '1 tbsp paprika'], instructions: 'Cook onion and ${ingredient} with paprika. Add potatoes and simmer until tender.' },
                { title: `${ingredient} Currywurst`, ingredients: [`1 lb ${ingredient}`, '1/2 cup ketchup', '1 tbsp curry powder'], instructions: 'Cook ${ingredient} and slice. Mix ketchup with curry powder and pour over ${ingredient}.' },
                { title: `${ingredient} Shawarma`, ingredients: [`1 lb ${ingredient}`, 'Pita bread', '1/2 cup yogurt', '1 tbsp tahini'], instructions: 'Cook ${ingredient} and serve in pita bread with yogurt and tahini sauce.' },
                { title: `${ingredient} Falafel`, ingredients: [`1 cup chickpeas`, `1/2 cup ${ingredient}`, '1 tbsp cumin', '1 tbsp coriander'], instructions: 'Blend all ingredients together. Form into balls and fry until golden brown.' },
                { title: `${ingredient} Chili`, ingredients: [`1 lb ${ingredient}`, '1 can beans', '1 can tomatoes', '1 tbsp chili powder'], instructions: 'Cook ${ingredient} with beans, tomatoes, and chili powder. Simmer until thickened.' }
            ];
        }

        function getRandomImageUrl(ingredient) {
            return `https://source.unsplash.com/featured/?${ingredient}`;
        }

        function displayRecipes(recipes, ingredient) {
            const recipeContainer = document.getElementById('recipes');
            recipeContainer.innerHTML = '';

            for (let recipe of recipes) {
                const recipeElement = document.createElement('div');
                recipeElement.classList.add('recipe');

                const title = document.createElement('h2');
                title.textContent = recipe.title;
                recipeElement.appendChild(title);

                const image = document.createElement('img');
                image.src = getRandomImageUrl(ingredient);
                recipeElement.appendChild(image);

                const ingredientsList = document.createElement('ul');
                for (let ingredient of recipe.ingredients) {
                    const ingredientItem = document.createElement('li');
                    ingredientItem.textContent = ingredient;
                    ingredientsList.appendChild(ingredientItem);
                }
                recipeElement.appendChild(ingredientsList);

                const instructions = document.createElement('p');
                instructions.textContent = recipe.instructions;
                recipeElement.appendChild(instructions);

                recipeContainer.appendChild(recipeElement);
            }
        }
    </script>
</body>
</html>
