The challenge
===

### Let's start with some context.

You work for a mobile cover sales company, your project is basically to keep the product list service.
The service consists of a public endpoint and the product listing UI.

The same endpoint used by your UI is used by the apps team (iOS and Android development) for product list.

The current product list is simple, just the product with the SKU, manufacturer, name, color picture and if it is available in stock.
If you have a similar template but with a variant color, it is shown twice in the list in their respective colors.

The stakeholder request is that templates should now be grouped by name and manufacturer, so the list will be shortened and colors will be made available on the product detail page.

### The issue?

- The app development team is too busy and can't make the change now to consume the new service, and the app should stay running even if the user doesn't update their mobile app.

Now is your time to shine and bring the best solution so you can have the updated version on the website and not impact mobile apps.

#### Some useful information:

- You have the responsibility over this service, so feel free to do whatever you want with the code;
- No matter what solution you adopt, there is no right solution but make sure your application works and you deliver what was asked by the stakeholder;
- Publish your solution on GitHub;
- Every change that you made you should commit, in a atomic level and we will take a look carefully with all of them. 

#### What are your challenges:

- Build an interface to display the product list, in the version requested by the business, grouped by manufacturer and name;
- Serve 2 different API's, one for the mobile apps team and another for your new fancy interface asked by the stakeholder;
- Reduce the scope of the API, there is some information that is not needed.

#### Plus:

- Use webpack encore and make a module using React;
- You wanna do more? Maybe a product description page can be something to consider.
- Are you a performance booster? Think about it, but be sure that you can have the proper numbers; 
- What do you think about automation? Do your best to make your team productive with some funny automation.
