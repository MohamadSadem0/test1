package com.example.Alert.Guard.dto;
import com.example.Alert.Guard.entity.UserRole;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.security.Timestamp;

@Data
@AllArgsConstructor
@NoArgsConstructor
public class MessageDTO {
    private Long messageId;
    private ChatSessionDTO chatSession;
    private UserDTO sender;
    private UserDTO receiver;
    private String messageText;
    private Timestamp timestamp;
}