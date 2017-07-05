[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Asana/functions?utm_source=RapidAPIGitHub_AsanaFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Asana Package
Customize the Asana experience, leverage your data with the Asana API, and join a community of developers building with Asana.
* Domain: asana.com
* Credentials: accessToken

## How to get credentials: 
1. Navigate to [Asana apps page](https://app.asana.com/)
2. Create new app.
3. Create New Personal Access Token

 
## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## Webhook credentials
  Please use SDK to test this feature.
  1. Go to [RapidAPI](http://rapidapi.com)
  2. Log in or create an account
  3. Go to [My apps](https://dashboard.rapidapi.com/projects)
  4. Add new project with projectName to get your project Key
 
  | Field      | Type       | Description
  |------------|------------|----------
  | projectName     | credentials| Your RapidAPI project name
  | projectKey | credentials     | Your RapidAPI project key

 
## Asana.getSingleAttachment
Returns the full record for a single attachment.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your access token.
| attachmentId| String     | Globally unique identifier for the attachment.

## Asana.getAttachmentsOnTask
Returns the compact records for all attachments on the task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| taskId     | String     | Globally unique identifier for the task.

## Asana.uploadAttachmentToTask
Returns the compact records for all attachments on the task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| taskId     | String     | Globally unique identifier for the task.
| file       | File       | Uploaded file

## Asana.getProjectCustomFieldsSettings
Returns a list of all of the custom fields settings on a project, in compact form. Note that, as in all queries to collections which return compact representation, opt_fields and opt_expand can be used to include more data than is returned in the compact representation. See the getting started guide on input/output options for more information.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| projectId  | String     | The ID of the project for which to list custom field settings.

## Asana.getCustomField
Returns the complete definition of a custom field’s metadata.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| fieldId    | String     | Globally unique identifier for the custom field.

## Asana.getAllCustomFields
Returns a list of the compact representation of all of the custom fields in a workspace.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace or organization to find custom field definitions in.

## Asana.getEvents
Returns the full record for all events that have occurred since the sync token was created.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| projectId  | String     | A resource ID to subscribe to. The resource can be a task or project.
| taskId     | String     | A resource ID to subscribe to. The resource can be a task or project.
| sync       | String     | A sync token received from the last request, or none on first sync. Events will be returned from the point in time that the sync token was generated.

## Asana.createProject
Creates a new project in a workspace or team.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace or organization to create the project in.
| team       | String     | If creating in an organization, the specific team to create the project in.
| name       | String     | Name of the project
| notes      | String     | Project notes

## Asana.getSingleProject
Returns the complete project record for a single project.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| project    | String     | The project to get.

## Asana.updateProject
A specific, existing project can be updated. Only the fields provided in the data block will be updated; any unspecified fields will remain unchanged.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| project    | String     | The project to get.
| name       | String     | Name of the project
| notes      | String     | Project notes

## Asana.deleteProject
A specific, existing project can be deleted by making a DELETE request on the URL for that project.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| project    | String     | The project to delete.

## Asana.queryProjects
Returns the compact project records for some filtered set of projects. Use one or more of the parameters provided to filter the projects returned.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| archived   | String     | Only return projects whose archived field takes on the value of this parameter.

## Asana.getProjectTasks
Returns the compact task records for all tasks within the given project, ordered by their priority within the project. Tasks can exist in more than one project at a time.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| project    | String     | The project in which to search for tasks.

## Asana.createProjectCustomFieldSetting
Create a new custom field setting on the project.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your access token.
| project     | String     | The project to associate the custom field with.
| customField | String     | The id of the custom field to associate with this project.
| isImportant | String     | Whether this field should be considered important to this project.
| insertBefore| String     | An id of a Custom Field Settings on this project, before which the new Custom Field Settings will be added. insert_before and insert_after parameters cannot both be specified.
| insertAfter | String     | An id of a Custom Field Settings on this project, after which the new Custom Field Settings will be added. insert_before and insert_after parameters cannot both be specified.

## Asana.createSection
Creates a new section in a project.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| project    | String     | The project to associate the custom field with.
| name       | String     | The text to be displayed as the section name. This cannot be an empty string..

## Asana.getProjectSections
Returns the compact records for all sections in the specified project.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| project    | String     | The project to associate the custom field with.

## Asana.getSingleSection
Returns the complete record for a single section.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| section    | String     | The section to get.

## Asana.updateSection
When using this method, it is best to specify only those fields you wish to change, or else you may overwrite changes made by another user since you last retrieved the task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| section    | String     | The section to update.
| name       | String     | Section name.

## Asana.deleteSection
Note that sections must be empty to be deleted.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| section    | String     | The section to delete.

## Asana.reorderSections
At this point in time, moving sections is not supported in list views, only board views.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your access token.
| section      | String     | The section to delete.
| beforeSection| String     | Insert the given section immediately before the section specified by this parameter.
| afterSection | String     | Insert the given section immediately before the section specified by this parameter.

## Asana.getTaskStories
Returns the compact records for all stories on the task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | Globally unique identifier for the task.

## Asana.getSingleStory
Returns the full record for a single story.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| story      | String     | Globally unique identifier for the story.

## Asana.addCommentToTask
Adds a comment to a task. The comment will be authored by the currently authenticated user, and timestamped when the server receives the request.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | Globally unique identifier for the task.
| text       | String     | The plain text of the comment to add.

## Asana.createTag
Creates a new tag in a workspace or organization.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace or organization to create the tag in.
| tag        | String     | Tag name

## Asana.getSingleTag
Returns the complete tag record for a single tag.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| tag        | String     | The tag to get.

## Asana.updateTag
Updates the properties of a tag. Only the fields provided in the data block will be updated; any unspecified fields will remain unchanged.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| tag        | String     | The tag to update.
| name       | String     | Tag name.

## Asana.queryTags
Returns the compact tag records for some filtered set of tags. Use one or more of the parameters provided to filter the tags returned.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| archived   | Boolean    | Only return tags whose archived field takes on the value of this parameter.

## Asana.getTasksByTag
Returns the compact task records for all tasks with the given tag. Tasks can have more than one tag at a time.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| tag        | String     | The tag to fetch tasks from.

## Asana.createTask
Creating a new task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace to create a task in.
| name       | String     | Name of the task. This is generally a short sentence fragment that fits on a line in the UI for maximum readability. However, it can be longer.
| followers  | List       | List of users following this task.
| assignee   | String     | User to which this task is assigned, or null if the task is unassigned.
| notes      | String     | More detailed, free-form textual information associated with the task.

## Asana.getTask
Returns the complete task record for a single task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to get.

## Asana.updateTask
Existing task can be updated.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to update.
| name       | String     | Name of the task. This is generally a short sentence fragment that fits on a line in the UI for maximum readability. However, it can be longer.
| assignee   | String     | User to which this task is assigned, or null if the task is unassigned.
| notes      | String     | More detailed, free-form textual information associated with the task.

## Asana.deleteTask
Deleted tasks go into the “trash” of the user making the delete request. Tasks can be recovered from the trash within a period of 30 days; afterward they are completely removed from the system.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to delete.

## Asana.queryTasks
Returns the compact task records for all tasks within the given project, ordered by their priority within the project.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| projectId  | String     | The project in which to search for tasks.

## Asana.createSubtask
Creates a new subtask and adds it to the parent task. Returns the full record for the newly created subtask.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to add a subtask to.
| name       | String     | Name of the task. This is generally a short sentence fragment that fits on a line in the UI for maximum readability. However, it can be longer.
| followers  | List       | List of users following this task.
| assignee   | String     | User to which this task is assigned, or null if the task is unassigned.
| notes      | String     | More detailed, free-form textual information associated with the task.

## Asana.getProjectsByTask
Returns a compact representation of all of the projects the task is in.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | Globally unique identifier for the task.

## Asana.addTaskToProject
Adds the task to the specified project, in the optional location specified. If no location arguments are given, the task will be added to the end of the project.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your access token.
| task        | String     | The task to add to a project.
| project     | String     | The project to add the task to.
| insertAfter | String     | A task in the project to insert the task after, or null to insert at the beginning of the list.
| insertBefore| String     | A task in the project to insert the task before, or null to insert at the end of the list.
| section     | String     | A section in the project to insert the task into. The task will be inserted at the bottom of the section.

## Asana.removeTaskFromProject
Removes the task from the specified project. The task will still exist in the system, but it will not be in the project anymore.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to remove from a project.
| project    | String     | The project to remove the task from.

## Asana.getTaskTags
Returns a compact representation of all of the tags the task has.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to get tags on.

## Asana.addTagToTask
Adds a tag to a task. Returns an empty data block.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to add a tag to.
| tag        | String     | The tag to add to the task.

## Asana.removeTagFromTask
Removes a tag from the task. Returns an empty data block.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to remove a tag from.
| tag        | String     | The tag to remove from the task.

## Asana.addFollowersToTask
Adds each of the specified followers to the task, if they are not already following. Returns the complete, updated record for the affected task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to add followers to.
| followers  | List       | List of followers to add to the task.

## Asana.removeFollowersFromTask
Removes each of the specified followers from the task if they are following. Returns the complete, updated record for the affected task.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| task       | String     | The task to remove followers from.
| followers  | List       | List of followers to add to the task.

## Asana.getOrganizationSingleTeam
Returns the full record for a single team.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| team       | String     | Globally unique identifier for the team.

## Asana.getOrganizationTeams
Returns the full record for a single team.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your access token.
| organization| String     | Globally unique identifier for the workspace or organization.

## Asana.getTeamsUserAssignedTo
Returns the compact records for all teams to which user is assigned.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| userId     | String     | Globally unique identifier for the team.

## Asana.getTeamMembersUsers
Returns the compact records for all users that are members of the team.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| team       | String     | Globally unique identifier for the team.

## Asana.addUserToTeam
The user making this call must be a member of the team in order to add others. 

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| team       | String     | Globally unique identifier for the team.
| user       | String     | An identifier for the user. Can be one of an email address, the globally unique identifier for the user, or the keyword me to indicate the current user making the request.

## Asana.removeUserFromTeam
The user to remove can be referenced by their globally unique user ID or their email address. Removes the user from the specified team. Returns an empty data record. 

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| team       | String     | Globally unique identifier for the team.
| user       | String     |  An identifier for the user. Can be one of an email address, the globally unique identifier for the user, or the keyword me to indicate the current user making the request.

## Asana.queryTypeahead
This method returns typeahead search results.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | Workspace id
| query      | String     | The value to look up. This is a string that will be used to search for relevant objects. If an empty string is passed in, the API will currently return an empty set.
| type       | String     | The type of object to look up. You can choose from one of the following: project, user, task, and tag. Note that unlike other endpoints, the types listed here are in singular form. Using multiple types is not yet supported.
| count      | Number     | The number of results to return. The default is 20 if this parameter is omitted, with a minimum of 1 and a maximum of 100. If there are fewer results found than requested, all will be returned.

## Asana.getSingleUser
Returns the full user record for the single user with the provided ID.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| user       | String     | An identifier for the user. Can be one of an email address, the globally unique identifier for the user, or the keyword me to indicate the current user making the request.

## Asana.getUsers
Returns the user records for all users in the specified workspace or organization.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace in which to get users.

## Asana.createWebhook
Establishing a webhook is a two-part process. First, a simple HTTP POST similar to any other resource creation. Since you could have multiple webhooks we recommend specifying a unique local id for each target.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| resource   | String     | A resource ID to subscribe to. The resource can be a task or project.
| target     | String     | The URL to receive the HTTP POST.

## Asana.getWebhooks
Returns the compact representation of all webhooks your app has registered for the authenticated user in the given workspace.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace to query for webhooks in.

## Asana.getSingleWebhook
Returns the full record for the given webhook.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| webhook    | String     | The webhook to get.

## Asana.deleteWebhook
This method permanently removes a webhook. Note that it may be possible to receive a request that was already in flight after deleting the webhook, but no further requests will be issued.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| webhook    | String     | The webhook to delete.

## Asana.getWorkplaces
Returns the full workspace record for a single workspace.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.

## Asana.updateWorkplace
Currently the only field that can be modified for a workspace is its name.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace to update.
| name       | String     | The workspace name.

## Asana.typeaheadSearch
Retrieves objects in the workspace based on an auto-completion/typeahead search algorithm. This feature is meant to provide results quickly, so do not rely on this API to provide extremely accurate search results. The result set is limited to a single page of results with a maximum size, so you won’t be able to fetch large numbers of results.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace to fetch objects from.
| type       | String     | The type of values the typeahead should return. Note that unlike in the names of endpoints, the types listed here are in singular form (e.g. task). Using multiple types is not yet supported.
| query      | String     | The string that will be used to search for relevant objects. If an empty string is passed in, the API will currently return an empty result set.
| count      | Number     | The number of results to return. The default is 20 if this parameter is omitted, with a minimum of 1 and a maximum of 100. If there are fewer results found than requested, all will be returned.

## Asana.addUserToWorkspace
The user can be referenced by their globally unique user ID or their email address. Returns the full user record for the invited user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace or organization to invite the user to.
| user       | String     | An identifier for the user. Can be one of an email address, the globally unique identifier for the user, or the keyword me to indicate the current user making the request.

## Asana.removeUserFromWorkspace
The user making this call must be an admin in the workspace. Returns an empty data record.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your access token.
| workspace  | String     | The workspace or organization to invite the user to.
| user       | String     | An identifier for the user. Can be one of an email address, the globally unique identifier for the user, or the keyword me to indicate the current user making the request.

