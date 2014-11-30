# AmekWP Starter Theme
Basic starter theme for my wp projects

### Tools I use
+ Bootstrap (for the frontend)
+ Semantic UI (for the backend)
+ wp-bootstrap-navwalker (for the navigation)

## Directory Setup
1. Static
    1. Styles
    2. Scripts
    3. Images
    4. Fonts
    5. Vendors (optional in the case you want to place entire resource in it's parent folder e.g. font-awesome)
2. Toolbox
    1. functions.php - contains php include references to all the seperate functions that will be used
    2. readme.md - guide to set up
    3. each custom post type should be appropriately named and kept in a folder for grouping purposes
    4. function files will use amk_functionname.php naming convention
3. Naming convention:
    * page-pagename.php - pages
    * single-itemname.php - single page
    * category-categoryname.php - category page
    * home.php - blog page
    * front_page.php - custom home page