comparer
========

Comparer - A simple comparing tool (PHP & Mysql)
Using Facebook Auth for now.

Idea outline:

User Heirarchy:
Admin -> Mod -> User

Data is organized in Categories.
Each Category has topics & agents.
An agent can only use the topics inside it's category.

Example:
Category : Political Parties
Agents : Democrats, Rebublicans (Looking for a better name for agents)
Topics : Taxes, Immigraton Reform, Healthcare (Topics here are issues)

Topics here are common to both agents, and likely most agents in a given category.

Categories can only be added by admins.
Topics can only be added to a category, once added, data can be filled in on that topic for any agent in the category.
Topics can be suggested by anyone, but suggestions have to be authorized by a mod.
Anyone can add agents to a category.
Anyone can add data to an agent for a topic.

Added data can have an upvoting system. (Downvoting is only for accuracy, not for opinions.)

Rewards?
- Karma system - People adding content with more upvotes get badges etc.

