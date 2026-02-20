---
on:
  push: {}
  workflow_dispatch: {}

# Permissions ko wapas 'read' kar diya kyunki compiler 'write' se gussa hai
permissions:
  contents: read
  issues: read
  pull-requests: read

# Sirf engine rakhenge, model ko ye khud handle karega
engine: copilot

# Safe outputs hi ab issue likhne ka kaam karega
safe-outputs:
  create-issue:
    title-prefix: "[AI-Report] "
---
# Repository Health Report Agent

You are a repository assistant.

## Task 1: Basic Health Check
Identify all open pull requests and list the names of all branches. 

## Final Action
Use the safe-outputs tool to create a new GitHub Issue with these findings.